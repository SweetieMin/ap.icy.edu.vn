<?php

namespace App\Repositories\Contracts;
//use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface TimeTableRepositoryInterface
{
    public function getAll();
    public function getById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);

    public function getTodaySchedulesByAuthId();
    public function getSchedulesByRole();
}