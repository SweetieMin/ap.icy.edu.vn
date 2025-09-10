<?php

namespace App\Livewire\Back\Management\Course;

use Livewire\Component;
use Livewire\Attributes\Title;

use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Repositories\Contracts\CourseRepositoryInterface;

#[Title('Lớp học')]
class Courses extends Component
{
    use WithPagination, WithoutUrlPagination;


    public function addCourse()
    {
        $this->dispatch('add-course');
    }
    
    public function deleteCourse($id)
    {
        $this->dispatch('delete-course', $id);
    }

    public function editCourse($id)
    {
        $this->dispatch('edit-course', $id);
    }

    public function updateCourseOrdering(array $orderedIds)
    {
        app(CourseRepositoryInterface::class)->updateOrdering($orderedIds);
        session()->flash('success', 'Sắp xếp lớp học thành công.');
        $this->redirectRoute('admin.management.courses', navigate: true);
    }

    public function render()
    {
        $courses = app(CourseRepositoryInterface::class)->getAll(5);
        return view('livewire.back.management.course.courses',[
            'courses' => $courses,
        ]);
    }
}
