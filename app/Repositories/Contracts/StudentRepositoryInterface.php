<?php

namespace App\Repositories\Contracts;

interface StudentRepositoryInterface
{
    public function getAllStudentsPendingOfLocation();
    public function getStudentById(int $id);
    public function createStudent(array $data);
    public function getStudentsOfLocationWithFilters(array $filters = []);
    
    /**
     * Get students without any location assigned.
     * @param array $filters ['search' => ?]
     */
    public function getStudentsWithoutLocation(array $filters = []);
}


