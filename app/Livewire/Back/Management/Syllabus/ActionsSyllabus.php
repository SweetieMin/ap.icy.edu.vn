<?php

namespace App\Livewire\Back\Management\Syllabus;

use Flux\Flux;
use Livewire\Component;
use App\Models\Syllabus;
use Livewire\Attributes\On;
use App\Support\Validation\SyllabusRules;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Repositories\Contracts\SyllabusRepositoryInterface;


class ActionsSyllabus extends Component
{


    public $syllabusId;
    public $subject_id;
    public $lesson_number;
    public $content;
    public $vocabulary;
    public $grammar;
    public $assignment;
    public $CLO;
    public $is_url;

    public $isEditing = false;

    protected SyllabusRepositoryInterface $syllabusRepository;

    public function boot(SyllabusRepositoryInterface $syllabusRepository)
    {
        $this->syllabusRepository = $syllabusRepository;
    }

    protected function rules()
    {
        return SyllabusRules::rules($this->syllabusId);
    }

    protected function messages()
    {
        return SyllabusRules::messages();
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
        $this->validate();

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
