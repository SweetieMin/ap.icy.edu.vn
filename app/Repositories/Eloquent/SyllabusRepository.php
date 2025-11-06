<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\SyllabusRepositoryInterface;
use App\Models\Syllabus;

class SyllabusRepository implements SyllabusRepositoryInterface
{
    protected array $syllabusCache = [];

    protected function prepareData(array $data): array
    {
        return [
            'subject_id' => $data['subject_id'],
            'lesson_number' => $data['lesson_number'],
            'content' => isset($data['content']) ? trim($data['content']) : null,
            'vocabulary' => isset($data['vocabulary']) ? trim($data['vocabulary']) : null,
            'grammar' => isset($data['grammar']) ? trim($data['grammar']) : null,
            'assignment' => isset($data['assignment']) ? trim($data['assignment']) : null,
            'CLO' => isset($data['CLO']) ? trim($data['CLO']) : null,
            'is_url' => isset($data['is_url']) ? $data['is_url'] : false,
        ];
    }

    public function getAll()
    {
        return Syllabus::with(['subject.program'])
            ->orderBy('lesson_number')
            ->get();
    }

    public function create(array $data): Syllabus
    {
        $data = $this->prepareData($data);
        $remainingIds = Syllabus::where('subject_id', $data['subject_id'])
            ->orderBy('lesson_number')
            ->pluck('id')
            ->toArray();
        $this->updateOrdering($remainingIds);
        return Syllabus::create($data);
    }

    public function update(int $id, array $data): Syllabus
    {
        $syllabus = $this->getSyllabusById($id);
        $data = $this->prepareData($data);
        $syllabus->update($data);
        $remainingIds = Syllabus::where('subject_id', $syllabus->subject_id)
            ->orderBy('lesson_number')
            ->pluck('id')
            ->toArray();
        $this->updateOrdering($remainingIds);
        // Clear cache
        unset($this->syllabusCache[$id]);
        
        return $syllabus;
    }

    public function delete(int $id): void
    {
        $syllabus = $this->getSyllabusById($id);
        $syllabus->delete();
        $remainingIds = Syllabus::where('subject_id', $syllabus->subject_id)
            ->orderBy('lesson_number')
            ->pluck('id')
            ->toArray();
        $this->updateOrdering($remainingIds);
        // Clear cache
        unset($this->syllabusCache[$id]);
    }

    public function getSyllabusById(int $id): Syllabus
    {
        return $this->syllabusCache[$id] ??= Syllabus::with(['subject.program'])->findOrFail($id);
    }

    public function getBySubject(int $subjectId)
    {
        return Syllabus::with(['subject.program'])
            ->where('subject_id', $subjectId)
            ->orderBy('lesson_number')
            ->get();
    }

    public function updateOrdering(array $orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            Syllabus::where('id', $id)->update(['lesson_number' => $index + 1]);
        }
    }

    public function search(string $search)
    {
        return Syllabus::with(['subject.program'])
            ->where(function ($q) use ($search) {
                $q->where('lesson_number', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%')
                  ->orWhere('vocabulary', 'like', '%' . $search . '%')
                  ->orWhere('grammar', 'like', '%' . $search . '%')
                  ->orWhere('assignment', 'like', '%' . $search . '%')
                  ->orWhere('CLO', 'like', '%' . $search . '%')
                  ->orWhereHas('subject', function ($subjectQuery) use ($search) {
                      $subjectQuery->where('name', 'like', '%' . $search . '%')
                                  ->orWhere('code', 'like', '%' . $search . '%');
                  });
            })
            ->orderBy('lesson_number')
            ->get();
    }

    public function deleteWhere(int $id)
    {
        return Syllabus::where('subject_id', $id)->delete();
    }
}
