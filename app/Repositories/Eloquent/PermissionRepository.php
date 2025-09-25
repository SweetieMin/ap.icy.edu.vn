<?php

namespace App\Repositories\Eloquent;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Contracts\PermissionRepositoryInterface;
use phpDocumentor\Reflection\PseudoTypes\True_;

class PermissionRepository implements PermissionRepositoryInterface
{
    protected $model;

    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    /**
     * Get all permissions
     */
    public function getAll(): Collection
    {
        return $this->model
            ->orderBy('isShow', 'asc') // 0 trước, 1 sau
            ->orderBy('displayName', 'asc')
            ->get();
    }

    /**
     * Get paginated permissions
     */
    public function getPaginated(int $perPage = 10)
    {
        return $this->model->orderBy('isShow', 'asc') // 0 trước, 1 sau
                             ->orderBy('displayName', 'asc')
                             ->paginate($perPage);
    }

    /**
     * Get permission by ID
     */
    public function findById(int $id): ?Permission
    {
        return $this->model->find($id);
    }

    /**
     * Get permission by router
     */
    public function findByRouter(string $router): ?Permission
    {
        return $this->model->where('router', $router)->first();
    }

    /**
     * Create new permission
     */
    public function create(array $data): Permission
    {
        $permission = $this->model->create($data);
        $roleBOD = Role::where('name', 'BOD')->first();
        $roleBOD->permissions()->attach($permission->id);
        //dd($roleBOD->permissions());
        return $permission;
    }

    /**
     * Update permission
     */
    public function update(int $id, array $data): bool
    {
        $permission = $this->findById($id);
        if (!$permission) {
            return false;
        }
        $permission->update($data);
        $roleBOD = Role::where('name', 'BOD')->first();
        $roleBOD->permissions()->attach($permission->id);

        return true;
    }

    /**
     * Delete permission
     */
    public function delete(int $id): bool
    {
        $permission = $this->findById($id);
        if (!$permission) {
            return false;
        }
        $permission->delete();
        $roleBOD = Role::where('name', 'BOD')->first();
        $roleBOD->permissions()->detach($permission->id);
        return true;
    }

    /**
     * Get all admin routes
     */
    public function getAdminRoutes(): array
    {
        $routes = Route::getRoutes();
        $adminRoutes = [];

        foreach ($routes as $route) {
            $routeName = $route->getName();
            $routeUri = $route->uri();

            // Check if route name starts with 'admin.' and URI starts with 'admin/'
            // Also exclude routes that are just 'admin.' (redirect routes)
            if (
                $routeName &&
                str_starts_with($routeName, 'admin.') &&
                str_starts_with($routeUri, 'admin/') &&
                $routeName !== 'admin.' &&
                strlen($routeName) > 6
            ) { // More than just 'admin.'
                $adminRoutes[] = $routeName;
            }
        }

        // Remove duplicates and sort
        $adminRoutes = array_unique($adminRoutes);
        sort($adminRoutes);

        return $adminRoutes;
    }

    /**
     * Get available admin routes (not yet in permissions table)
     */
    public function getAvailableAdminRoutes(): array
    {
        $allRoutes = $this->getAdminRoutes();
        $existingRoutes = $this->model->pluck('router')->toArray();

        // Filter out existing routes
        $availableRoutes = array_diff($allRoutes, $existingRoutes);

        return array_values($availableRoutes);
    }


    /**
     * Create multiple permissions
     */
    public function createMultiple(array $permissions): bool
    {
        try {
            foreach ($permissions as $permissionData) {
                $this->model->create($permissionData);
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Check if permission exists by router
     */
    public function existsByRouter(string $router): bool
    {
        return $this->model->where('router', $router)->exists();
    }
}
