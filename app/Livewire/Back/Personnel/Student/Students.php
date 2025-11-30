<?php

namespace App\Livewire\Back\Personnel\Student;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\StudentRepositoryInterface;


#[Title('Học viên')]
class Students extends Component
{

    public $filterLocationId = null;
    public $search = '';
    public $students = [];
    public $studentsWithoutLocation = [];

    public $avatarFile;

    public function addStudent()
    {
        $this->dispatch('add-student');
    }

    public function updatedAvatarFile()
    {
        
    }

    public function editStudent($studentId)
    {
        $this->dispatch('edit-student', $studentId);
    }

    public function actionsTuition($studentId)
    {
        $this->dispatch('add-tuition', $studentId);
        //back/finance/tuition/tuitions
    }

    public function deleteStudent($studentId)
    {
        $this->authorize('delete', app(UserRepositoryInterface::class)->getUserById($studentId));
        $this->dispatch('delete-student', $studentId);
    }

    public function updatedSearch()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'search' => $this->search,
        ];
        $this->students = app(StudentRepositoryInterface::class)->getStudentsOfLocationWithFilters($filters);

        // Load học viên không có location với filter search
        $filtersWithoutLocation = [
            'search' => $this->search,
        ];
        $this->studentsWithoutLocation = app(StudentRepositoryInterface::class)->getStudentsWithoutLocation($filtersWithoutLocation);
    }

    public function updatedFilterLocationId()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'search' => $this->search,
        ];
        $this->students = app(StudentRepositoryInterface::class)->getStudentsOfLocationWithFilters($filters);

        // Load học viên không có location với filter search
        $filtersWithoutLocation = [
            'search' => $this->search,
        ];
        $this->studentsWithoutLocation = app(StudentRepositoryInterface::class)->getStudentsWithoutLocation($filtersWithoutLocation);
    }

    public function printStudentRegistration($studentToken)
    {
        $url = route('pdf.student-registration', [
            'token' => $studentToken,
        ]);
        $this->dispatch('open-pdf', ['url' => $url]);
    }

    public function paymentStudent($studentId)
    {
        $this->redirectRoute('admin.finance.tuitions-payment', ['student' => $studentId], navigate: true);
    }

    public function render()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'search' => $this->search,
        ];
        $this->students = app(StudentRepositoryInterface::class)->getStudentsOfLocationWithFilters($filters);

        // Load học viên không có location
        $filtersWithoutLocation = [
            'search' => $this->search,
        ];
        $this->studentsWithoutLocation = app(StudentRepositoryInterface::class)->getStudentsWithoutLocation($filtersWithoutLocation);

        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        return view('livewire.back.personnel.student.students', [
            'students' => $this->students,
            'studentsWithoutLocation' => $this->studentsWithoutLocation,
            'locations' => $locations,
        ]);
    }

    public function exportDataStudent(){
        $this->dispatch('exportDataStudent');
    }

    public function updateAvatar($id)
    {
        $this->dispatch('updateAvatar', $id);
    }
}
