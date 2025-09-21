<?php

namespace App\Livewire\Back\Management\Subject;

use Livewire\Component;
use Livewire\Attributes\On;
use Flux\Flux;
use App\Repositories\Contracts\SubjectRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;
use App\Support\Validation\SubjectRules;
use Throwable;


class ActionsSubject extends Component
{
    public $subjectId;
    public $name;
    public $code;
    public $curriculum_name;
    public $url_book;
    public $program_id;
    public $isEditSubjectMode = false;

    #[On('add-subject')]
    public function addSubject()
    {
        $this->reset(['name', 'code', 'curriculum_name', 'url_book', 'program_id', 'isEditSubjectMode']);
        Flux::modal('modal-subject')->show();
    }

    public function createSubject()
    {
        $this->validate();

        app(SubjectRepositoryInterface::class)->create([
            'name' => $this->name,
            'code' => $this->code,
            'curriculum_name' => $this->curriculum_name,
            'url_book' => $this->url_book,
        ], $this->program_id);

        session()->flash('success', 'Môn học đã được tạo thành công.');
        Flux::modal('modal-subject')->close();
        $this->dispatch('subject-created', $this->program_id);
        $this->reset(['name', 'code', 'curriculum_name', 'url_book', 'program_id']);
    }

    #[On('edit-subject')]
    public function editSubject($subjectId)
    {
        $subject = app(SubjectRepositoryInterface::class)->getSubjectById($subjectId);
        $this->subjectId = $subject->id;
        $this->name = trim(str_replace('ICY', '', $subject->name));
        $this->code = $subject->code;
        $this->curriculum_name = $subject->curriculum_name;
        $this->url_book = $subject->url_book;
        $this->program_id = $subject->program_id;
        $this->isEditSubjectMode = true;

        Flux::modal('modal-subject')->show();
    }

    public function updateSubject()
    {
        $this->validate();

        app(SubjectRepositoryInterface::class)->update($this->subjectId, [
            'name' => $this->name,
            'code' => $this->code,
            'curriculum_name' => $this->curriculum_name,
            'url_book' => $this->url_book,
            'program_id' => $this->program_id,
        ]);

        session()->flash('success', 'Môn học đã được cập nhật thành công.');
        Flux::modal('modal-subject')->close();
        $this->redirectRoute('admin.management.subjects', navigate: true, parameters: ['program' => $this->program_id]);
        $this->dispatch('subject-created', $this->program_id);

        $this->reset(['subjectId', 'name', 'code', 'curriculum_name', 'url_book', 'program_id', 'isEditSubjectMode']);
    }

    #[On('delete-subject')]
    public function deleteSubject($subjectId)
    {
        $this->subjectId = $subjectId;
        Flux::modal('modal-delete-subject')->show();
    }

    public function deleteSubjectConfirm()
    {
        try {
            $subject = app(SubjectRepositoryInterface::class)->getSubjectById($this->subjectId);
            $programId = $subject->program_id;

            app(SubjectRepositoryInterface::class)->delete($this->subjectId);
            session()->flash('success', 'Xoá môn học thành công.');
            $this->reset(['subjectId']);
            $this->dispatch('subject-created', $programId);
            $this->redirectRoute('admin.management.subjects', navigate: true, parameters: ['program' => $programId]);
        } catch (Throwable $e) {
            session()->flash('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau.');
            return;
        }
        Flux::modal('modal-delete-subject')->close();
    }

    public function rules()
    {
        return SubjectRules::rules($this->subjectId);
    }

    public function messages()
    {
        return SubjectRules::messages();
    }


    public function render()
    {
        $programs = app(ProgramRepositoryInterface::class)->getAll(100);
        return view('livewire.back.management.subject.actions-subject', [
            'programs' => $programs,
        ]);
    }
}
