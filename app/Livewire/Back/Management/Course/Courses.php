<?php

namespace App\Livewire\Back\Management\Course;

use App\Models\Subject;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Livewire\WithoutUrlPagination;
use App\Support\TimeTable\TimeTable;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\LocationRepositoryInterface;

#[Title('Lớp học')]
class Courses extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $locationFilter = '';
    public $seasonFilter = '';
    public $perPage = 10;


    protected $queryString = [
        'search' => ['except' => ''],
        'locationFilter' => ['except' => ''],
        'seasonFilter' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingLocationFilter()
    {
        $this->resetPage();
    }

    public function updatingSeasonFilter()
    {
        $this->resetPage();
    }

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

    public function showClassList($courseId)
    {
        $this->dispatch('show-class-list', $courseId);
    }

    public function autoCreateClassScheduleTimeTable($courseId)
    {
        $this->dispatch('class-schedule-modal', $courseId);
    }

    public function render()
    {
        $courses = app(CourseRepositoryInterface::class)->getAllWithFilters([
            'search' => $this->search,
            'location_id' => $this->locationFilter,
            'season_id' => $this->seasonFilter,
        ], $this->perPage);

        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        $seasons = app(SeasonRepositoryInterface::class)->getAllSeasons();

        return view('livewire.back.management.course.courses', [
            'courses' => $courses,
            'locations' => $locations,
            'seasons' => $seasons,
        ]);
    }
}
