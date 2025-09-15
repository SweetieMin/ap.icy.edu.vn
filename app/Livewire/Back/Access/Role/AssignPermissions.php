<?php

namespace App\Livewire\Back\Access\Role;

use Livewire\Component;
use Livewire\Attributes\On;
use Flux\Flux;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class AssignPermissions extends Component
{
    public $roleId;
    public $role;
    public $permissions = [];
    public $selectedPermissions = [];
    public $search = '';

    #[On('assign-permissions')]
    public function assignPermissions($id)
    {
        $this->roleId = $id;
        $this->role = app(RoleRepositoryInterface::class)->getRoleById($id);
        
        // Lấy tất cả permissions có isShow = true
        $this->permissions = app(PermissionRepositoryInterface::class)
            ->getAll()
            ->where('isShow', true)
            ->values()
            ->toArray();
        
        // Lấy permissions hiện tại của role
        $this->selectedPermissions = $this->role->permissions->pluck('id')->toArray();
        
        Flux::modal('assign-permissions')->show();
    }

    public function updatedSearch()
    {
        // Filter permissions based on search
        $allPermissions = app(PermissionRepositoryInterface::class)
            ->getAll()
            ->where('isShow', true);
            
        if ($this->search) {
            $this->permissions = $allPermissions
                ->filter(function ($permission) {
                    return str_contains(strtolower($permission->displayName), strtolower($this->search)) ||
                           str_contains(strtolower($permission->router), strtolower($this->search));
                })
                ->values()
                ->toArray();
        } else {
            $this->permissions = $allPermissions->values()->toArray();
        }
    }

    public function togglePermission($permissionId)
    {
        if (in_array($permissionId, $this->selectedPermissions)) {
            $this->selectedPermissions = array_filter($this->selectedPermissions, function($id) use ($permissionId) {
                return $id != $permissionId;
            });
        } else {
            $this->selectedPermissions[] = $permissionId;
        }
    }

    public function selectAll()
    {
        $this->selectedPermissions = collect($this->permissions)->pluck('id')->toArray();
    }

    public function deselectAll()
    {
        $this->selectedPermissions = [];
    }

    public function savePermissions()
    {
        app(RoleRepositoryInterface::class)->syncPermissions($this->roleId, $this->selectedPermissions);
        
        session()->flash('success', 'Quyền hạn đã được cập nhật thành công.');
        Flux::modal('assign-permissions')->close();
        $this->redirectRoute('admin.access.roles', navigate: true);
    }

    public function render()
    {
        return view('livewire.back.access.role.assign-permissions');
    }
}
