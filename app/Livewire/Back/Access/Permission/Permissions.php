<?php

namespace App\Livewire\Back\Access\Permission;

use Livewire\Component;
use Livewire\WithPagination;
use App\Repositories\Contracts\PermissionRepositoryInterface;
use Livewire\Attributes\Title;

#[Title('Permission')]
class Permissions extends Component
{
    use WithPagination;

    public function addPermission()
    {
        $this->dispatch('add-permission');
    }

    public function addBulkPermission()
    {
        $this->dispatch('add-bulk-permission');
    }

    public function deletePermission($id)
    {
        $this->dispatch('delete-permission', $id);
    }

    public function editPermission($id)
    {
        $this->dispatch('edit-permission', $id);
    }

    public function render()
    {
        $permissions = app(PermissionRepositoryInterface::class)->getPaginated(10);
        return view('livewire.back.access.permission.permissions', [
            'permissions' => $permissions,
        ]);
    }
}
