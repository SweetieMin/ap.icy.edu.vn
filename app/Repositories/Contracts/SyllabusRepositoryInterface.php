<?php

namespace App\Repositories\Contracts;

interface SyllabusRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function getSyllabusById(int $id);
    public function getBySubject(int $subjectId);
    public function search(string $search);
    public function updateOrdering(array $orderedIds);

    public function deleteWhere(int $id);
}
