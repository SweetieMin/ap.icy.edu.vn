<?php

namespace App\Livewire\Back\Management\Course;

use Flux\Flux;
use Throwable;
use App\Models\Subject;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Support\Course\CourseHelper;
use App\Support\Validation\CourseRules;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;


class ActionsCourse extends Component
{
    public $courseId;
    public $name;
    public $description;
    public $location_id;
    public $season_id;
    public $program_id;
    public $subject_id;
    public $ordering = 1000;
    public $isEditCourseMode = false;

    public $locations = [];
    public $seasons = [];
    public $programs = [];
    public $subjects = [];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        $this->locations = $locations;
        $seasons = app(SeasonRepositoryInterface::class)->getSeasonAvailable();
        $this->seasons = $seasons;
        $programs = app(ProgramRepositoryInterface::class)->getAllPrograms();
        $this->programs = $programs;

        $this->subjects = Subject::all();
        // Mặc định chọn location đầu tiên và season đầu tiên
        if (!empty($this->locations)) {
            $this->location_id = $locations->first()->id;
        }
        if (!empty($this->seasons)) {
            $this->season_id = $seasons->first()->id;
        }
    }

    public function rules()
    {
        return CourseRules::rules($this->courseId);
    }

    public function messages()
    {
        return CourseRules::messages();
    }

    public function programSelected()
    {
        // Reset subject khi chọn program mới
        $this->subject_id = null;
        $this->name = null;
        
        // Load subjects theo program
        if ($this->program_id) {
            $this->subjects = Subject::where('program_id', $this->program_id)->get();
        } else {
            $this->subjects = Subject::all();
        }
    }

    public function subjectSelected()
    {
        $this->name = CourseHelper::generateCourseName($this->location_id, $this->season_id, $this->subject_id);
    }

    #[On('add-course')]
    public function addCourse()
    {
        $this->resetErrorBag();
        $this->reset(['courseId', 'name', 'description', 'location_id', 'season_id', 'program_id', 'subject_id', 'ordering']);
        $this->ordering = 1000;
        $this->isEditCourseMode = false;
        $this->loadData();
        Flux::modal('modal-course')->show();
    }

    public function createCourse()
    {

        $this->validate();

        try {
            app(CourseRepositoryInterface::class)->create([
                'name' => $this->name,
                'description' => $this->description,
                'location_id' => $this->location_id,
                'season_id' => $this->season_id,
                'subject_id' => $this->subject_id,
                'ordering' => $this->ordering,
            ]);

            session()->flash('success', 'Lớp học đã được tạo thành công.');
            Flux::modal('modal-course')->close();
            $this->redirectRoute('admin.management.courses', navigate: true);
            $this->reset(['name', 'description', 'location_id', 'season_id', 'subject_id', 'ordering']);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi tạo lớp học: ' . $e->getMessage());
        }
    }

    #[On('edit-course')]
    public function editCourse($courseId)
    {
        $this->resetErrorBag();
        $course = app(CourseRepositoryInterface::class)->getCourseById($courseId);

        $this->courseId = $course->id;
        $this->name = $course->name;
        $this->description = $course->description;
        $this->location_id = $course->location_id;
        $this->season_id = $course->season_id;
        $this->program_id = $course->subject->program_id ?? null;
        $this->subject_id = $course->subject_id;
        $this->ordering = $course->ordering;
        $this->isEditCourseMode = true;

        $this->loadData();
        Flux::modal('modal-course')->show();
    }

    public function updateCourse()
    {
        $this->validate();

        try {
            app(CourseRepositoryInterface::class)->update($this->courseId, [
                'name' => $this->name,
                'description' => $this->description,
                'location_id' => $this->location_id,
                'season_id' => $this->season_id,
                'subject_id' => $this->subject_id,
                'ordering' => $this->ordering,
            ]);

            session()->flash('success', 'Lớp học đã được cập nhật thành công.');
            Flux::modal('modal-course')->close();
            $this->redirectRoute('admin.management.courses', navigate: true);
            $this->reset(['courseId', 'name', 'description', 'location_id', 'season_id', 'program_id', 'subject_id', 'ordering']);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi cập nhật lớp học: ' . $e->getMessage());
        }
    }

    #[On('delete-course')]
    public function deleteCourse($courseId)
    {
        try {
            app(CourseRepositoryInterface::class)->delete($courseId);
            session()->flash('success', 'Lớp học đã được xóa thành công.');
            $this->redirectRoute('admin.management.courses', navigate: true);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xóa lớp học: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.back.management.course.actions-course');
    }
}
