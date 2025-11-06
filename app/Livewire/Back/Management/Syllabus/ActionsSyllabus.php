<?php

namespace App\Livewire\Back\Management\Syllabus;

use Flux\Flux;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Syllabus;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Maatwebsite\Excel\Facades\Excel;
use App\Support\Validation\SyllabusRules;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Repositories\Contracts\SyllabusRepositoryInterface;


class ActionsSyllabus extends Component
{
    use WithFileUploads;

    public $syllabusId;
    public $subject_id;
    public $lesson_number;
    public $content;
    public $vocabulary;
    public $grammar;
    public $assignment;
    public $CLO;
    public $is_url;
    public $preview = [];
    public $isEditing = false;


    #[Validate('required|mimes:xlsx|max:20480')]
    public $excel_file;


    public function updatedExcelFile()
    {

        $this->validate([
            'excel_file' => 'required|mimes:xlsx|max:20480'
        ]);

        $path = $this->excel_file->getRealPath();

        $data = Excel::toArray([], $path)[0];

        // Lấy header row
        $headers = array_map(function ($h) {
            return strtolower(trim($h));
        }, $data[0]);

        // Danh sách cột bắt buộc
        $requiredHeaders = [
            'lesson',
            'content',
            'vocabulary',
            'grammar',
            'assignment',
            'clo',
        ];

        // Kiểm tra thiếu cột
        $missing = array_diff($requiredHeaders, $headers);

        if (!empty($missing)) {
            $this->preview = null;

            session()->flash('error', 'File Excel không đúng format. Thiếu cột: ' . implode(', ', $missing));
            $this->redirectRoute('admin.management.syllabi', navigate: true);
            return;
        }

        // OK → bỏ header row
        unset($data[0]);

        $this->preview = $data;
    }


    public function save()
    {
        $this->validate([
            'subject_id' => 'required',
            'preview'    => 'required|array|min:2', // ít nhất header + 1 dòng
        ]);

        $subject = app(SubjectRepositoryInterface::class)
            ->getSubjectById($this->subject_id);

        if (!$subject) {
            $this->dispatch('notify', message: 'Subject không tồn tại!');
            return;
        }

        // Bỏ dòng header
        $rows = $this->preview;

        $this->syllabusRepository->deleteWhere($this->subject_id);

        foreach ($rows as $row) {

            $this->syllabusRepository->create([
                'subject_id'     => $this->subject_id,
                'lesson_number'  => $row[0] ?? null,
                'content'        => $row[1] ?? null,
                'vocabulary'     => $row[2] ?? null,
                'grammar'        => $row[3] ?? null,
                'assignment'     => $row[4] ?? null,
                'CLO'            => $row[5] ?? null,
                'is_url'         => false,
            ]);
        }

        session()->flash('success', 'Syllabus đã được tạo thành công!');
        $this->redirectRoute('admin.management.syllabi', navigate: true);
    }


    protected SyllabusRepositoryInterface $syllabusRepository;

    public function boot(SyllabusRepositoryInterface $syllabusRepository)
    {
        $this->syllabusRepository = $syllabusRepository;
    }


    protected function attributes()
    {
        return SyllabusRules::attributes();
    }

    #[On('add-syllabus')]
    public function addSyllabus()
    {
        $this->resetErrorBag();
        $this->reset(['syllabusId', 'subject_id', 'lesson_number', 'content', 'vocabulary', 'grammar', 'assignment', 'CLO']);
        $this->isEditing = false;
        Flux::modal('modal-syllabus')->show();
    }

    public function createSyllabus()
    {
        $this->validate();

        if (filter_var($this->CLO, FILTER_VALIDATE_URL)) {
            $this->is_url = true;
        } else {
            $this->is_url = false;
        }

        $this->syllabusRepository->create([
            'subject_id' => $this->subject_id,
            'lesson_number' => $this->lesson_number,
            'content' => $this->content,
            'vocabulary' => $this->vocabulary,
            'grammar' => $this->grammar,
            'assignment' => $this->assignment,
            'CLO' => $this->CLO,
            'is_url' => $this->is_url,
        ]);
        $this->reset(['syllabusId', 'subject_id', 'lesson_number', 'content', 'vocabulary', 'grammar', 'assignment', 'CLO']);
        Flux::modal('modal-syllabus')->close();
        session()->flash('success', 'Syllabus đã được tạo thành công!');
        $this->redirectRoute('admin.management.syllabi', navigate: true);
    }

    #[On('edit-syllabus')]
    public function editSyllabus($id)
    {
        $syllabus = Syllabus::findOrFail($id);
        $this->resetErrorBag();
        $this->syllabusId = $id;
        $this->loadSyllabus();
        $this->isEditing = true;
        Flux::modal('modal-syllabus')->show();
    }

    public function updateSyllabus()
    {

        if (filter_var($this->CLO, FILTER_VALIDATE_URL)) {
            $this->is_url = true;
        } else {
            $this->is_url = false;
        }

        $this->syllabusRepository->update($this->syllabusId, [
            'subject_id' => $this->subject_id,
            'lesson_number' => $this->lesson_number,
            'content' => $this->content,
            'vocabulary' => $this->vocabulary,
            'grammar' => $this->grammar,
            'assignment' => $this->assignment,
            'CLO' => $this->CLO,
            'is_url' => $this->is_url,
        ]);

        $this->reset(['syllabusId', 'subject_id', 'lesson_number', 'content', 'vocabulary', 'grammar', 'assignment', 'CLO']);
        Flux::modal('modal-syllabus')->close();
        session()->flash('success', 'Syllabus đã được cập nhật thành công!');
        $this->redirectRoute('admin.management.syllabi', navigate: true);
    }

    #[On('delete-syllabus')]
    public function deleteSyllabus($id)
    {
        $this->syllabusId = $id;
        Flux::modal('delete-syllabus')->show();
    }

    public function deleteSyllabusConfirm()
    {
        $this->syllabusRepository->delete($this->syllabusId);
        $this->reset(['syllabusId']);
        Flux::modal('delete-syllabus')->close();
        session()->flash('success', 'Syllabus đã được xóa thành công!');
        $this->redirectRoute('admin.management.syllabi', navigate: true);
    }

    public function loadSyllabus()
    {
        $syllabus = $this->syllabusRepository->getSyllabusById($this->syllabusId);
        $this->subject_id = $syllabus->subject_id;
        $this->lesson_number = $syllabus->lesson_number;
        $this->content = $syllabus->content;
        $this->vocabulary = $syllabus->vocabulary;
        $this->grammar = $syllabus->grammar;
        $this->assignment = $syllabus->assignment;
        $this->CLO = $syllabus->CLO;
    }

    #[On('import-syllabus')]
    public function importSyllabus()
    {
        $this->preview = [];
        Flux::modal('import-syllabus')->show();
    }


    public function render()
    {
        // Lấy subjects từ component cha (Syllabi) thông qua session hoặc parameter
        $subjects = app(SubjectRepositoryInterface::class)->getAll();

        // Nếu có subject_id được chọn, lấy subjects của chương trình đó
        if ($this->subject_id) {
            $subject = app(SubjectRepositoryInterface::class)->getSubjectById($this->subject_id);
            if ($subject) {
                $subjects = app(SubjectRepositoryInterface::class)->getByProgram($subject->program_id);
            }
        }

        return view('livewire.back.management.syllabus.actions-syllabus', [
            'subjects' => $subjects,
        ]);
    }
}
