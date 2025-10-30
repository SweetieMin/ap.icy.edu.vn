<?php

namespace App\Livewire\Back\Arrangement;

use Flux\Flux;
use Carbon\Carbon;
use App\Models\ClassSchedule;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Support\TimeTable\TimeTableHelper;
use App\Support\Validation\TimeTableRules;
use Omnia\LivewireCalendar\LivewireCalendar;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\TimeTableRepositoryInterface;

#[Title('Sắp xếp lịch học')]
class TimeTable extends LivewireCalendar
{
    public $modalSetup = 'vendor.livewire-calendar.modal-time-table';
    public $selectedDate;
    public $eventColor = 'bg-blue-500';
    public $isEdit = false;
    public $availableCourses = [];
    public $kindOfEvents = [];

    public $selectedEventType = '';
    public $eventDescription = '';
    public $selectedCourseId = '';
    public $startTime = '';
    public $endTime = '';
    public $roomName = '';
    public $eventId = '';

    public $modalView = '';

    protected function rules()
    {
        return TimeTableRules::rules();
    }

    protected function messages()
    {
        return TimeTableRules::messages();
    }

    protected function resetEvent()
    {
        $this->reset(['eventDescription', 'selectedEventType', 'selectedCourseId', 'startTime', 'endTime', 'roomName', 'eventColor', 'isEdit']);
    }

    /**
     * Lấy danh sách lớp có season đang diễn ra hoặc sắp diễn ra
     */
    public function loadAvailableCourses()
    {
        $this->availableCourses = app(CourseRepositoryInterface::class)->getCoursesWithActiveSeasons();
    }

    /**
     * Lấy danh sách loại sự kiện
     */
    public function loadKindOfEvents()
    {
        $this->kindOfEvents = TimeTableHelper::getKindOfEvents();
    }

    public function afterMount($extras = [])
    {
        $this->modalSetup = $extras['modalSetup'] ?? 'vendor.livewire-calendar.modal-time-table';
        $this->loadAvailableCourses();
        $this->loadKindOfEvents();
    }

    public function onDayClick($year, $month, $day)
    {
        $this->selectedDate = Carbon::createFromDate($year, $month, $day);
        $this->eventColor = 'bg-blue-500'; // Màu mặc định
        $this->isEdit = false;
        $this->resetEvent();
        Flux::modal('add-event')->show();
    }

    /**
     * Lưu sự kiện mới
     */
    public function saveEvent()
    {
        $this->validate();

        $schedule = app(TimeTableRepositoryInterface::class)->create([
            'course_id' => $this->selectedCourseId,
            'name' => $this->selectedEventType,
            'date' => $this->selectedDate,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'room_name' => $this->roomName,
            'note' => $this->eventDescription,
            'color' => TimeTableHelper::getColorByEventType($this->selectedEventType),
            'created_by' => Auth::user()->id,
        ]);

        if ($schedule) {
            session()->flash('success', 'Sự kiện đã được tạo thành công');
            $this->redirectRoute('admin.arrangement.time-table', navigate: true);
            Flux::modal('add-event')->close();
        } else {
            session()->flash('error', 'Sự kiện đã được tạo thành công');
            $this->redirectRoute('admin.arrangement.time-table', navigate: true);
            Flux::modal('add-event')->close();
        }
    }

    public function deleteEvent()
    {
        $event = app(TimeTableRepositoryInterface::class)->getById($this->eventId);
        $event->delete();
        session()->flash('success', 'Sự kiện đã được xóa thành công');
        $this->redirectRoute('admin.arrangement.time-table', navigate: true);
        Flux::modal('add-event')->close();
    }

        /**
     * Xử lý khi click vào sự kiện
     */
    public function onEventClick($eventId) {
        $this->resetEvent();
        $this->eventId = $eventId;
        $event = app(TimeTableRepositoryInterface::class)->getById($eventId);
        
        $this->selectedEventType = $event->name;
        $this->selectedDate = $event->date;
        $this->eventDescription = $event->note;
        $this->selectedCourseId = $event->course_id;
        $this->startTime = $event->start_time->format('H:i');
        $this->endTime = $event->end_time->format('H:i');
        $this->roomName = $event->room_name;
        $this->eventColor = $event->color ?? 'bg-pink-500';
        $this->isEdit = true;
        Flux::modal('add-event')->show();
    }

    /**
     * Cập nhật sự kiện
     */
    public function updateEvent()
    {
        $this->validate();

        $data = [
            'course_id' => $this->selectedCourseId,
            'name' => $this->selectedEventType,
            'date' => $this->selectedDate,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'room_name' => $this->roomName,
            'note' => $this->eventDescription,
            'color' => TimeTableHelper::getColorByEventType($this->selectedEventType),
            'created_by' => Auth::user()->id,
        ];
        $event = app(TimeTableRepositoryInterface::class)->update($this->eventId, $data);
        if ($event) {
            session()->flash('success', 'Sự kiện đã được cập nhật thành công');
        } else {
            session()->flash('error', 'Sự kiện đã được cập nhật thất bại');
        }
        $this->redirectRoute('admin.arrangement.time-table', navigate: true);
        Flux::modal('add-event')->close();
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        $date = Carbon::createFromDate($year, $month, $day);

        $event = ClassSchedule::find($eventId)->update([
            'date' => $date,
        ]);

        if ($event) {
            session()->flash('success', 'Sự kiện đã được di chuyển thành công');
        } else {
            session()->flash('error', 'Sự kiện đã được di chuyển thất bại');
        }
        $this->redirectRoute('admin.arrangement.time-table', navigate: true);
        Flux::modal('add-event')->close();

    }

    public function closeModal()
    {
        $this->resetEvent();
        Flux::modal('add-event')->close();
    }

    public function events(): Collection
    {
        $events = app(TimeTableRepositoryInterface::class)->getAll();

        return $events->map(function ($event) {
            // Xử lý date - có thể là string hoặc Carbon instance
            $date = is_string($event->date) ? $event->date : $event->date->format('Y-m-d');
            
            // Xử lý start_time và end_time - có thể là string hoặc Carbon instance
            $startTime = is_string($event->start_time) ? date('H:i', strtotime($event->start_time)) : $event->start_time->format('H:i');
            $endTime = is_string($event->end_time) ? date('H:i', strtotime($event->end_time)) : $event->end_time->format('H:i');
            
            return [
                'id' => $event->id,
                'title' =>$startTime . ': Lớp - ' . $event->course->name,
                'description' => $event->note,
                'date' => $date,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'room_name' => $event->room_name,
                'color' => $event->color ?? 'bg-pink-500', // Sử dụng màu từ database, fallback về màu mặc định
                'course_name' => $event->course->name ?? 'N/A',
            ];
        });
    }
}
