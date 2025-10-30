<?php

namespace App\Repositories\Eloquent;

use App\Models\Course;
use App\Models\ClassSchedule;
use App\Support\TimeTable\TimeTableHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\TimeTableRepositoryInterface;

class TimeTableRepository implements TimeTableRepositoryInterface
{
    protected array $eventCache = [];

    public function getAll()
    {
        return ClassSchedule::with('course')->get();
    }

    public function getTodaySchedulesByAuthId()
    {
        $userId = Auth::id();
        $today = now()->toDateString();

        $schedules = ClassSchedule::with(['course.subject'])
            ->whereDate('date', $today)
            ->whereHas('course.users', function ($q) use ($userId) {
                $q->where('users.id', $userId);
            })
            ->orderBy('start_time')
            ->get()
            ->map(function ($row) {
                $startTs = strtotime($row->start_time);
                $endTs   = strtotime($row->end_time);
                $startHm = date('H:i', $startTs);
                $endHm   = date('H:i', $endTs);

                $shift      = TimeTableHelper::calculateShiftByHour($startTs, $endTs);
                $shiftName  = TimeTableHelper::getShiftName($shift);
                $shiftColor = TimeTableHelper::getShiftBadgeColor($shift);

                return [
                    'id'            => $row->id,
                    'course_id'     => $row->course_id,
                    'course_name'   => $row->course->name ?? null,
                    'schedule_name' => $row->name,
                    'date'          => $row->date->format('d/m/Y'),
                    'start_time'    => $row->start_time,
                    'end_time'      => $row->end_time,
                    'room'          => $row->room_name,
                    'shift'         => $shift,
                    'shift_name'    => $shiftName,
                    'shift_color'   => $shiftColor,
                    'time_range'    => $startHm . ' - ' . $endHm,
                    'subject_name'  => $row->course->subject->name ?? null,
                ];
            });

        return $schedules;
    }


    protected function prepareData(array $data): array
    {
        return [
            'course_id' => $data['course_id'],
            'name' => $data['name'],
            'date' => $data['date'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'room_name' => isset($data['room_name']) ? ucwords(trim($data['room_name'])) : null,
            'note' => isset($data['note']) ? ucfirst(trim($data['note'])) : null,
            'color' => $data['color'],
            'created_by' => $data['created_by'],
        ];
    }

    public function create(array $data)
    {
        return ClassSchedule::create($this->prepareData($data));
    }

    public function getById(int $id)
    {
        return ClassSchedule::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $event = $this->getById($id);
        $event->update($this->prepareData($data));
        return $event;
    }

    public function getSchedulesByRole()
    {
        $role = Auth::user()->roles->first();
        return TimeTableHelper::getTimeTableByRole($role->name);
    }
}
