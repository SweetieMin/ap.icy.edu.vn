<?php

namespace App\Policies;


use App\Models\User;
use App\Models\Syllabus;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Access\Response;

class SyllabusPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('BOD');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Syllabus $syllabus): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {

        return $user->hasRole('BOD');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Syllabus $syllabus): bool
    {
        return $user->hasRole('BOD');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Syllabus $syllabus): bool
    {
        return $user->hasRole('BOD');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Syllabus $syllabus): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Syllabus $syllabus): bool
    {
        return false;
    }
}
