<?php

namespace App\Repositories\Contracts;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Collection;

interface PermissionRepositoryInterface
{
    /**
     * Get all permissions
     */
    public function getAll(): Collection;

    /**
     * Get paginated permissions
     */
    public function getPaginated(int $perPage = 10);

    /**
     * Get permission by ID
     */
    public function findById(int $id): ?Permission;

    /**
     * Get permission by router
     */
    public function findByRouter(string $router): ?Permission;

    /**
     * Create new permission
     */
    public function create(array $data): Permission;

    /**
     * Update permission
     */
    public function update(int $id, array $data): bool;

    /**
     * Delete permission
     */
    public function delete(int $id): bool;

    /**
     * Get all admin routes
     */
    public function getAdminRoutes(): array;

    /**
     * Get available admin routes (not yet in permissions table)
     */
    public function getAvailableAdminRoutes(): array;


    /**
     * Create multiple permissions
     */
    public function createMultiple(array $permissions): bool;

    /**
     * Check if permission exists by router
     */
    public function existsByRouter(string $router): bool;
}