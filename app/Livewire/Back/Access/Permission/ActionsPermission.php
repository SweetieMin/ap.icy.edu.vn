<?php

namespace App\Livewire\Back\Access\Permission;

use Livewire\Component;
use Livewire\Attributes\On;
use Flux\Flux;
use App\Support\Validation\PermissionValidation;
use App\Repositories\Contracts\PermissionRepositoryInterface;

class ActionsPermission extends Component
{
    public $permissionId;
    public $router, $displayName, $isShow = true;
    public $isEditPermissionMode = false;
    public $routeOptions = [];
    
    // Bulk selection properties
    public $selectedRoutes = [];
    public $bulkPermissions = [];
    public $showBulkForm = false;

    public function rules()
    {
        $permissionValidation = app(PermissionValidation::class);
        
        if ($this->showBulkForm) {
            return $permissionValidation->getBulkCreateRules();
        }
        
        if ($this->isEditPermissionMode) {
            return $permissionValidation->getUpdateRules($this->permissionId);
        }
        
        return $permissionValidation->getCreateRules();
    }

    public function messages()
    {
        $permissionValidation = app(PermissionValidation::class);
        return $permissionValidation->getMessages();
    }

    #[On('add-permission')]
    public function addPermission()
    {
        $this->resetErrorBag();
        $this->reset(['permissionId', 'router', 'displayName', 'selectedRoutes', 'bulkPermissions', 'showBulkForm']);
        $this->isEditPermissionMode = false;
        $this->routeOptions = $this->getAvailableAdminRoutes();
        Flux::modal('modal-permission')->show();
    }

    #[On('add-bulk-permission')]
    public function addBulkPermission()
    {
        $this->resetErrorBag();
        $this->reset(['permissionId', 'router', 'displayName', 'selectedRoutes', 'bulkPermissions', 'showBulkForm']);
        $this->isEditPermissionMode = false;
        $this->routeOptions = $this->getAvailableAdminRoutes();
        $this->showBulkForm = true;
        Flux::modal('modal-permission')->show();
    }

    public function createPermission()
    {
        $this->permissionId = null;
        $this->validate();
        app(PermissionRepositoryInterface::class)->create([
            'router' => $this->router,
            'displayName' => $this->displayName,
            'isShow' => $this->isShow ?? 1,
        ]);
        session()->flash('success', 'Permission đã được thêm thành công.');
        $this->reset(['permissionId', 'router', 'displayName', 'isShow', 'selectedRoutes', 'bulkPermissions', 'showBulkForm']);
        Flux::modal('modal-permission')->close();
        $this->redirectRoute('admin.access.permissions', navigate: true);
    }

    public function createBulkPermission()
    {
        $this->validate();
        
        $permissions = [];
        foreach ($this->bulkPermissions as $permission) {
            $permissions[] = [
                'router' => $permission['router'],
                'displayName' => $permission['displayName'],
                'isShow' => $permission['isShow'] ?? 1,
            ];
        }
        
        app(PermissionRepositoryInterface::class)->createMultiple($permissions);
        session()->flash('success', 'Đã thêm ' . count($permissions) . ' permission thành công.');
        $this->reset(['permissionId', 'router', 'displayName', 'isShow', 'selectedRoutes', 'bulkPermissions', 'showBulkForm']);
        Flux::modal('modal-permission')->close();
        $this->redirectRoute('admin.access.permissions', navigate: true);
    }

    public function updatedSelectedRoutes()
    {
        $this->bulkPermissions = [];
        foreach ($this->selectedRoutes as $route) {
            $this->bulkPermissions[] = [
                'router' => $route,
                'displayName' => '', // Rỗng như yêu cầu
                'isShow' => true, // true như yêu cầu
            ];
        }
    }

    #[On('edit-permission')]
    public function editPermission($id)
    {
        $this->resetErrorBag();
        $this->permissionId = $id;
        $permission = app(PermissionRepositoryInterface::class)->findById($id);

        $this->displayName = $permission->displayName;
        $this->isShow = $permission->isShow;
        $this->isEditPermissionMode = true;
        $this->router = $permission->router;
        $this->showBulkForm = false;
        Flux::modal('modal-permission')->show();
    }

    public function updatePermission()
    {
        $this->validate();
        app(PermissionRepositoryInterface::class)->update($this->permissionId, [
            'displayName' => $this->displayName,
            'isShow' => $this->isShow ?? 1,
        ]);
        session()->flash('success', 'Permission đã được cập nhật thành công.');
        Flux::modal('modal-permission')->close();
        $this->redirectRoute('admin.access.permissions', navigate: true);
        $this->reset(['router', 'displayName', 'isShow','permissionId', 'selectedRoutes', 'bulkPermissions', 'showBulkForm']);
    }

    #[On('delete-permission')]
    public function deletePermission($id)
    {
        $this->permissionId = $id;
        Flux::modal('delete-permission')->show();
    }

    public function deletePermissionConfirm()
    {
        app(PermissionRepositoryInterface::class)->delete($this->permissionId);
        session()->flash('success', 'Permission đã được xóa thành công.');
        Flux::modal('delete-permission')->close();
        $this->redirectRoute('admin.access.permissions', navigate: true);
    }

    public function getAdminRoutes()
    {
        return app(PermissionRepositoryInterface::class)->getAdminRoutes();
    }

    public function getAvailableAdminRoutes()
    {
        return app(PermissionRepositoryInterface::class)->getAvailableAdminRoutes();
    }

    public function render()
    {
        return view('livewire.back.access.permission.actions-permission');
    }
}
