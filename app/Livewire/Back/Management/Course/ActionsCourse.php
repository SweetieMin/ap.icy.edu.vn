<?php

namespace App\Livewire\Back\Management\Course;

use Flux\Flux;
use Throwable;
use App\Models\Subject;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ClassSchedule;
use Illuminate\Support\Facades\DB;
use App\Support\Course\CourseHelper;
use App\Support\Validation\CourseRules;
use App\Support\TimeTable\TimeTableHelper;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;


class ActionsCourse extends Component
{
    public $courseId;
    public $name;
    public $description;
    public $location_id;
    public $season_id;
    public $program_id;
    public $subject_id;
    public $ordering = 1000;
    public $isEditCourseMode = false;

    public $locations = [];
    public $seasons = [];
    public $programs = [];
    public $subjects = [];

    // Class list modal properties
    public $showClassListModal = false;
    public $selectedCourse = null;
    public $classStudents = [];
    public $classTeachers = [];
    
    // Class schedule modal properties
    public $showClassScheduleModal = false;
    public $selectedWeekdays = [];
    public $selectedShift = '';
    public $selectedShiftDay1 = '';
    public $selectedShiftDay2 = '';
    public $shifts = [];
    public $startDate = '';
    public $endDate = '';

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $locations = app(UserRepositoryInterface::class)->getCurrentUserLocations();
        $this->locations = $locations;
        $seasons = app(SeasonRepositoryInterface::class)->getSeasonAvailable();
        $this->seasons = $seasons;
        $programs = app(ProgramRepositoryInterface::class)->getAllPrograms();
        $this->programs = $programs;

        $this->subjects = Subject::all();

        // Mặc định chọn location đầu tiên và season đầu tiên
        if (!empty($this->locations)) {
            $this->location_id = $locations->first()->id;
        }
        if (!empty($this->seasons)) {
            $this->season_id = $seasons->first()->id;
        }
    }


    public function rules()
    {
        return CourseRules::rules($this->courseId);
    }

    public function messages()
    {
        return CourseRules::messages();
    }

    public function programSelected()
    {
        // Reset subject khi chọn program mới
        $this->subject_id = null;
        $this->name = null;

        // Load subjects theo program
        if ($this->program_id) {
            $this->subjects = Subject::where('program_id', $this->program_id)->get();
        } else {
            $this->subjects = Subject::all();
        }
    }

    public function subjectSelected()
    {
        $this->name = CourseHelper::generateCourseName($this->location_id, $this->season_id, $this->subject_id);
    }


    #[On('add-course')]
    public function addCourse()
    {
        $this->resetErrorBag();
        $this->reset(['courseId', 'name', 'description', 'location_id', 'season_id', 'program_id', 'subject_id', 'ordering']);
        $this->ordering = 1000;
        $this->isEditCourseMode = false;
        $this->loadData();
        Flux::modal('modal-course')->show();
    }

    public function createCourse()
    {

        $this->validate();

        try {
            app(CourseRepositoryInterface::class)->create([
                'name' => $this->name,
                'description' => $this->description,
                'location_id' => $this->location_id,
                'season_id' => $this->season_id,
                'subject_id' => $this->subject_id,
                'ordering' => $this->ordering,
            ]);

            session()->flash('success', 'Lớp học đã được tạo thành công.');
            Flux::modal('modal-course')->close();
            $this->redirectRoute('admin.management.courses', navigate: true);
            $this->reset(['name', 'description', 'location_id', 'season_id', 'subject_id', 'ordering']);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi tạo lớp học: ' . $e->getMessage());
        }
    }

    #[On('edit-course')]
    public function editCourse($courseId)
    {
        $this->resetErrorBag();
        $course = app(CourseRepositoryInterface::class)->getCourseById($courseId);

        $this->courseId = $course->id;
        $this->name = $course->name;
        $this->description = $course->description;
        $this->location_id = $course->location_id;
        $this->season_id = $course->season_id;
        $this->program_id = $course->subject->program_id ?? null;
        $this->subject_id = $course->subject_id;
        $this->ordering = $course->ordering;
        $this->isEditCourseMode = true;

        $this->loadData();
        Flux::modal('modal-course')->show();
    }

    public function updateCourse()
    {
        $this->validate();

        try {
            app(CourseRepositoryInterface::class)->update($this->courseId, [
                'name' => $this->name,
                'description' => $this->description,
                'location_id' => $this->location_id,
                'season_id' => $this->season_id,
                'subject_id' => $this->subject_id,
                'ordering' => $this->ordering,
            ]);

            session()->flash('success', 'Lớp học đã được cập nhật thành công.');
            Flux::modal('modal-course')->close();
            $this->redirectRoute('admin.management.courses', navigate: true);
            $this->reset(['courseId', 'name', 'description', 'location_id', 'season_id', 'program_id', 'subject_id', 'ordering']);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi cập nhật lớp học: ' . $e->getMessage());
        }
    }

    #[On('delete-course')]
    public function deleteCourse($courseId)
    {
        try {
            app(CourseRepositoryInterface::class)->delete($courseId);
            session()->flash('success', 'Lớp học đã được xóa thành công.');
            $this->redirectRoute('admin.management.courses', navigate: true);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xóa lớp học: ' . $e->getMessage());
        }
    }

    #[On('show-class-list')]
    public function showClassList($courseId)
    {
        $this->selectedCourse = app(CourseRepositoryInterface::class)->getCourseById($courseId);

        if ($this->selectedCourse) {
            // Load teachers in this course
            $this->classTeachers = DB::table('course_user')
                ->join('users', 'course_user.user_id', '=', 'users.id')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('course_user.course_id', $courseId)
                ->where('course_user.status', 'active')
                ->whereIn('roles.name', ['TEACHER', 'BOD'])
                ->select(
                    'users.id as user_id',
                    'users.name',
                    'users.account_code',
                    'user_details.birthday',
                    'user_details.avatar',
                    'course_user.status',
                    'course_user.enrolled_at',
                    'roles.name as role_name'
                )
                ->get();

            // Load students in this course
            $this->classStudents = DB::table('course_user')
                ->join('users', 'course_user.user_id', '=', 'users.id')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('course_user.course_id', $courseId)
                ->where('course_user.status', 'active')
                ->where('roles.name', 'student')
                ->select(
                    'users.id as user_id',
                    'users.name',
                    'users.account_code',
                    'user_details.birthday',
                    'user_details.avatar',
                    'course_user.status',
                    'course_user.enrolled_at',
                    'roles.name as role_name'
                )
                ->get();
        }

        $this->showClassListModal = true;
    }

    public function closeClassListModal()
    {
        $this->showClassListModal = false;
        $this->selectedCourse = null;
        $this->classStudents = [];
        $this->classTeachers = [];
    }

    public function removeTeacherFromCourse($teacherId)
    {
        try {
            // Xóa giáo viên khỏi lớp
            DB::table('course_user')
                ->where('course_id', $this->selectedCourse->id)
                ->where('user_id', $teacherId)
                ->delete();

            // Reload danh sách giáo viên
            $this->classTeachers = DB::table('course_user')
                ->join('users', 'course_user.user_id', '=', 'users.id')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('course_user.course_id', $this->selectedCourse->id)
                ->where('course_user.status', 'active')
                ->whereIn('roles.name', ['TEACHER', 'BOD'])
                ->select(
                    'users.id as user_id',
                    'users.name',
                    'users.account_code',
                    'user_details.birthday',
                    'user_details.avatar',
                    'course_user.status',
                    'course_user.enrolled_at',
                    'roles.name as role_name'
                )
                ->get();

            session()->flash('success', 'Giáo viên đã được xóa khỏi lớp thành công.');
            $this->redirectRoute('admin.management.courses', navigate: true);
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xóa giáo viên: ' . $e->getMessage());
        }
    }

    public function removeStudentFromCourse($studentId)
    {
        try {
            // Xóa học viên khỏi lớp
            DB::table('course_user')
                ->where('course_id', $this->selectedCourse->id)
                ->where('user_id', $studentId)
                ->delete();

            // Reload danh sách học viên
            $this->classStudents = DB::table('course_user')
                ->join('users', 'course_user.user_id', '=', 'users.id')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('course_user.course_id', $this->selectedCourse->id)
                ->where('course_user.status', 'active')
                ->where('roles.name', 'student')
                ->select(
                    'users.id as user_id',
                    'users.name',
                    'users.account_code',
                    'user_details.birthday',
                    'user_details.avatar',
                    'course_user.status',
                    'course_user.enrolled_at',
                    'roles.name as role_name'
                )
                ->get();

            session()->flash('success', 'Học viên đã được xóa khỏi lớp thành công.');
        } catch (Throwable $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xóa học viên: ' . $e->getMessage());
        }
    }


    #[On('class-schedule-modal')]
    public function classScheduleModal($courseId)
    {
        $this->resetErrorBag();
        $this->reset(['selectedWeekdays', 'selectedShift', 'startDate', 'endDate']);
        if(ClassSchedule::where('course_id', $courseId)->exists()){
            session()->flash('error', 'Lớp học này đã có lịch học rồi!');
            $this->redirectRoute('admin.management.courses', navigate: true);
            return;
        }
        $this->courseId = $courseId;
        $this->shifts = $this->getShifts();
        $course = app(CourseRepositoryInterface::class)->getCourseById($courseId);
        $this->startDate = $course->season->start_date?->format('Y-m-d') 
                ?? now()->format('Y-m-d');
        $this->endDate = $course->season->end_date?->format('Y-m-d') 
                ?? now()->addMonths(3)->format('Y-m-d');
        $this->showClassScheduleModal = true;
    }

    public function selectedWeekdaysChanged()
    {
        // Reset ca học khi thay đổi ngày
        $this->selectedShiftDay1 = '';
        $this->selectedShiftDay2 = '';
    }

    public function getShifts()
    {
        $shifts = [];
        for ($i = 1; $i <= 6; $i++) {
            [$startTime, $endTime] = TimeTableHelper::getStartTimeAndEndTimeByShift($i);
            $shifts[$i] = [
                'id' => $i,
                'name' => "Ca {$i}",
                'time' => "{$startTime} - {$endTime}",
                'start_time' => $startTime,
                'end_time' => $endTime
            ];
        }
        return $shifts;
    }

    public function getDayName($dayNumber)
    {
        $days = [
            1 => 'Thứ 2',
            2 => 'Thứ 3', 
            3 => 'Thứ 4',
            4 => 'Thứ 5',
            5 => 'Thứ 6',
            6 => 'Thứ 7',
            7 => 'Chủ nhật'
        ];
        
        return $days[$dayNumber] ?? 'Ngày không hợp lệ';
    }

    public function createClassSchedule()
    {
        // Validation
        if (empty($this->selectedWeekdays) || count($this->selectedWeekdays) !== 2) {
            session()->flash('error', 'Vui lòng chọn đúng 2 ngày trong tuần!');
            return;
        }
        
        if (!$this->selectedShiftDay1 || !$this->selectedShiftDay2) {
            session()->flash('error', 'Vui lòng chọn ca học cho cả 2 ngày!');
            return;
        }
        
        try {
            // Lấy thông tin khóa học để có start_date và end_date
            $course = app(CourseRepositoryInterface::class)->getCourseById($this->courseId);
            if (!$course) {
                session()->flash('error', 'Không tìm thấy thông tin khóa học!');
                return;
            }

            $startDate = $this->startDate;
            $endDate = $this->endDate;

            // Gọi TimeTable helper để tạo lịch học với 2 ca học khác nhau
            $result = TimeTableHelper::autoCreateClassScheduleTimeTableWithDifferentShifts(
                courseId: $this->courseId,
                sessionA: (int) $this->selectedWeekdays[0], // Ngày đầu tiên
                sessionB: (int) $this->selectedWeekdays[1], // Ngày thứ 2
                shiftA: (int) $this->selectedShiftDay1, // Ca học cho ngày đầu tiên
                shiftB: (int) $this->selectedShiftDay2, // Ca học cho ngày thứ 2
                startDate: $startDate,
                endDate: $endDate
            );
            
            if ($result) {  
                session()->flash('success', 'Đã tạo lịch học tự động thành công!');
                $this->redirectRoute('admin.management.courses', navigate: true);
                $this->reset(['selectedWeekdays', 'selectedShiftDay1', 'selectedShiftDay2']);
            } else {
                session()->flash('error', 'Lớp học này đã có lịch học rồi!');
                $this->redirectRoute('admin.management.courses', navigate: true);
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi tạo lịch học: ' . $e->getMessage());
            $this->redirectRoute('admin.management.courses', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.back.management.course.actions-course');
    }
}
