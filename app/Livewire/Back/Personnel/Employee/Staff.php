<?php

namespace App\Livewire\Back\Personnel\Employee;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Repositories\Contracts\StaffRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\RoleRepositoryInterface;

#[Title('Nhân viên')]
class Staff extends Component
{
    public $filterLocationId = null;
    public $filterRoleId = null;
    public $search = '';
    public $staffs = [];
    public $staffsWithoutLocation = [];

    public function updatedFilterRoleId()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffs = app(StaffRepositoryInterface::class)->getStaffsOfLocationWithFilters($filters);
        
        // Load nhân viên không có location với filter role
        $filtersWithoutLocation = [
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffsWithoutLocation = app(StaffRepositoryInterface::class)->getStaffsWithoutLocation($filtersWithoutLocation);
    }

    public function addStaff()
    {
        $this->dispatch('add-staff');
    }

    public function editStaff($staffId)
    {
        $this->dispatch('edit-staff', $staffId);
    }

    public function deleteStaff($staffId)
    {
        $this->dispatch('delete-staff', $staffId);
    }

    public function updatedSearch()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffs = app(StaffRepositoryInterface::class)->getStaffsOfLocationWithFilters($filters);
        
        // Load nhân viên không có location với filter search
        $filtersWithoutLocation = [
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffsWithoutLocation = app(StaffRepositoryInterface::class)->getStaffsWithoutLocation($filtersWithoutLocation);
    }

    public function updatedFilterLocationId()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffs = app(StaffRepositoryInterface::class)->getStaffsOfLocationWithFilters($filters);
        
        // Load nhân viên không có location với filter role
        $filtersWithoutLocation = [
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffsWithoutLocation = app(StaffRepositoryInterface::class)->getStaffsWithoutLocation($filtersWithoutLocation);
    }

    public function render()
    {
        $filters = [
            'location_id' => $this->filterLocationId,
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffs = app(StaffRepositoryInterface::class)->getStaffsOfLocationWithFilters($filters);
        
        // Load nhân viên không có location
        $filtersWithoutLocation = [
            'role_id' => $this->filterRoleId,
            'search' => $this->search,
        ];
        $this->staffsWithoutLocation = app(StaffRepositoryInterface::class)->getStaffsWithoutLocation($filtersWithoutLocation);
        
        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        $roles = app(RoleRepositoryInterface::class)->managerAccessPersonnel();
        return view('livewire.back.personnel.employee.staff',[
            'staffs' => $this->staffs,
            'staffsWithoutLocation' => $this->staffsWithoutLocation,
            'locations' => $locations,
            'roles' => $roles,
        ]);
    }
    
}
