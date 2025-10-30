<?php

namespace App\Livewire\Back\Management\Syllabus;

use App\Models\Program;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Syllabus;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\Contracts\SubjectRepositoryInterface;

#[Title('Syllabus')]
class Syllabi extends Component
{
    use AuthorizesRequests;

    public $search = '';
    public $selectedProgramId;
    public $selectedSubjectId;
    public $programs;
    public $subjects;

    public function mount()
    {
        $this->loadPrograms();
        // Chọn chương trình đầu tiên làm mặc định
        $this->selectedProgramId = $this->programs->first()?->id;
        $this->loadSubjects();
        // Chọn môn học đầu tiên của chương trình làm mặc định
        $this->selectedSubjectId = $this->subjects->first()?->id;
    }

    public function loadPrograms()
    {
        $this->programs = Program::orderBy('ordering')->get();
    }

    public function loadSubjects()
    {
        if ($this->selectedProgramId) {
            $this->subjects = app(SubjectRepositoryInterface::class)->getByProgram($this->selectedProgramId);
        } else {
            $this->subjects = collect();
        }
    }

    public function selectProgram($programId)
    {
        $this->selectedProgramId = $programId;
        $this->loadSubjects(); // Chọn môn học đầu tiên của chương trình mới
        $this->selectedSubjectId = $this->subjects->first()?->id;
    }

    public function selectSubject($subjectId)
    {
        $this->selectedSubjectId = $subjectId;
    }

    public function updatedSelectedProgramId()
    {
        $this->loadSubjects();
        $this->selectedSubjectId = $this->subjects->first()?->id;
    }

    public function updateLessonOrder(array $orderedIds)
    {

        foreach ($orderedIds as $index => $id) {
            Syllabus::where('id', $id)->update(['lesson_number' => $index + 1]);
        }

        session()->flash('success', 'Thứ tự bài học đã được cập nhật thành công!');
    }

    public function addSyllabus()
    {
        $this->authorize('create', Syllabus::class);
        $this->dispatch('add-syllabus');
    }

    public function editSyllabus($id)
    {
        $this->authorize('update', Syllabus::findOrFail($id));
        $this->dispatch('edit-syllabus', $id);
    }

    public function deleteSyllabus($id)
    {
        $this->authorize('delete', Syllabus::findOrFail($id));
        $this->dispatch('delete-syllabus', $id);
    }


    public function render()
    {
        $syllabi = Syllabus::with(['subject.program'])
            ->where('subject_id', $this->selectedSubjectId)
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('lesson_number', 'like', '%' . $this->search . '%')
                        ->orWhere('content', 'like', '%' . $this->search . '%')
                        ->orWhere('vocabulary', 'like', '%' . $this->search . '%')
                        ->orWhere('grammar', 'like', '%' . $this->search . '%')
                        ->orWhere('assignment', 'like', '%' . $this->search . '%')
                        ->orWhere('CLO', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('lesson_number')
            ->get();

        return view('livewire.back.management.syllabus.syllabi', [
            'syllabi' => $syllabi,
            'programs' => $this->programs,
            'subjects' => $this->subjects,
        ]);
    }
}
