<?php

namespace App\Livewire\Back\General\Course;

use Flux\Flux;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CourseRepositoryInterface;

class MyCourses extends Component
{

    public $courses = [];
    public $selectedCourse = null;
    public $classStudents = [];

    public function mount()
    {
        $this->loadCourses();
    }

    public function showClassList($courseId)
    {
       $this->dispatch('show-class-list', $courseId);
    }

    public function loadCourses()
    {
        $this->courses = app(CourseRepositoryInterface::class)->getCoursesByAuthIdAndSeasonId();
    }

    public function render()
    {
        return view('livewire.back.general.course.my-courses');
    }
}
