<?php

namespace App\Livewire\Back\General\Course;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CourseRepositoryInterface;

#[Title('Lớp học của tôi')]

class LayoutCourse extends Component
{
    public $activeTab = 'schedule';
    public $selectedCourse = null;
    public $classStudents = [];
    public $selectedCourseId = null;
    public $attendanceHistory = [];
    public $classScheduleDates = [];

    protected $queryString = [
        'activeTab' => ['keep' => true],
    ];

    public function mount()
    {
        $this->activeTab = $this->activeTab ?? 'schedule';

        if ($this->selectedCourseId) {
            $this->loadSelectedCourse($this->selectedCourseId);
        } else {
            $this->activeTab = 'schedule';
        }
    }

    public function setActiveTab($tab)
    {
        if (in_array($tab, ['schedule', 'courses'])) {
            $this->resetSelectedCourse();
            $this->activeTab = $tab;
            return;
        }

        if (in_array($tab, ['class-list', 'attendance']) && !$this->selectedCourse) {
            $this->activeTab = 'schedule';
            return;
        }

        $this->activeTab = $tab;
    }

    protected function loadSelectedCourse($courseId)
    {
        $this->selectedCourseId = $courseId;
        $this->selectedCourse = app(CourseRepositoryInterface::class)->getCourseById($courseId);
        $this->classStudents = app(CourseRepositoryInterface::class)->getClassStudentsByCourseId($courseId);
        $this->loadAttendanceHistory($courseId);
    }

    protected function resetSelectedCourse()
    {
        $this->selectedCourseId = null;
        $this->selectedCourse = null;
        $this->classStudents = [];
        $this->attendanceHistory = [];
        $this->classScheduleDates = [];
    }

    #[On('show-class-list')]
    public function showClassList($courseId)
    {
        $this->selectedCourseId = $courseId;
        $this->selectedCourse = app(CourseRepositoryInterface::class)->getCourseById($courseId);
        $this->classStudents = app(CourseRepositoryInterface::class)->getClassStudentsByCourseId($courseId);
        $this->loadAttendanceHistory($courseId);

        $this->activeTab = 'class-list';
    }

    protected function loadAttendanceHistory($courseId)
    {
        // Lấy danh sách học viên của lớp
        $students = app(CourseRepositoryInterface::class)->getClassStudentsByCourseId($courseId);

        // Lấy tất cả ngày học của lớp (24 buổi) từ class_schedules
        $classSchedules = DB::table('class_schedules')
            ->where('course_id', $courseId)
            ->orderBy('date')
            ->get();

        $this->classScheduleDates = $classSchedules->pluck('date')->unique()->values()->toArray();

        // Lấy dữ liệu điểm danh
        $attendances = DB::table('attendances')
            ->join('class_schedules', 'attendances.class_schedule_id', '=', 'class_schedules.id')
            ->where('class_schedules.course_id', $courseId)
            ->select('attendances.*', 'class_schedules.date')
            ->get()
            ->groupBy('student_id');

        // Tạo dữ liệu cho bảng
        $this->attendanceHistory = [];
        foreach ($students as $student) {
            $studentAttendances = $attendances->get($student->id, collect());
            $totalClasses = count($this->classScheduleDates);
            
            // Chỉ tính vắng mặt cho những ngày đã có dữ liệu điểm danh
            $attendanceDates = $studentAttendances->pluck('date')->toArray();
            $absentCount = $studentAttendances->where('status', 'absent')->count();
            $attendanceCount = count($attendanceDates);
            $absentPercentage = $attendanceCount > 0 ? round(($absentCount / $totalClasses) * 100, 1) : 0;

            $attendanceData = [
                'student' => $student,
                'total_classes' => $totalClasses,
                'attendance_count' => $attendanceCount,
                'absent_count' => $absentCount,
                'absent_percentage' => $absentPercentage,
                'attendances' => []
            ];

            // Tạo dữ liệu cho từng ngày học (24 buổi)
            foreach ($this->classScheduleDates as $date) {
                $attendance = $studentAttendances->where('date', $date)->first();
                if ($attendance) {
                    // Có dữ liệu điểm danh
                    $attendanceData['attendances'][$date] = $attendance->status;
                } else {
                    // Chưa có dữ liệu điểm danh
                    $attendanceData['attendances'][$date] = null;
                }
            }

            $this->attendanceHistory[] = $attendanceData;
        }
    }

    public function render()
    {
        return view('livewire.back.general.course.layout-course');
    }
}
