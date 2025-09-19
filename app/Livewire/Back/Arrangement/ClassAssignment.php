<?php

namespace App\Livewire\Back\Arrangement;

use Livewire\Component;
use App\Models\Location;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CourseRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Repositories\Contracts\ProgramRepositoryInterface;
use App\Repositories\Contracts\StudentRepositoryInterface;
use App\Repositories\Contracts\LocationRepositoryInterface;

#[Title('Xếp lớp học')]
class ClassAssignment extends Component
{
    // Filters
    public $searchStudent = '';
    public $filterLocationId = '';
    public $filterSeasonId = '';
    public $filterProgramId = '';
    public $userType = 'student'; // 'student' or 'teacher'

    // Data
    public $students = [];
    public $courses = [];
    public $seasons = [];
    public $locations = [];
    public $programs = [];

    // Assignment
    public $selectedStudents = [];
    public $selectedCourseId = null;

    #[Url(except: '')]
    public $location;

    public function mount()
    {
        $this->loadData();
        if ($this->location) {
            $this->filterLocationId = $this->location;
        }
    }

    public function loadData()
    {
        $this->loadSeasons();
        $this->loadLocations();
        $this->loadPrograms();
        
        // Set default values to first items
        if (empty($this->filterLocationId) && count($this->locations) > 0) {
            $this->filterLocationId = $this->locations[0]['id'];
        }
        if (empty($this->filterSeasonId) && count($this->seasons) > 0) {
            $this->filterSeasonId = $this->seasons[0]['id'];
        }
        if (empty($this->filterProgramId) && count($this->programs) > 0) {
            $this->filterProgramId = $this->programs[0]['id'];
        }
        
        $this->loadStudents();
        $this->loadCourses();
    }

    public function loadStudents()
    {
        if ($this->userType === 'student') {
            // Lấy học viên đã đóng học phí nhưng chưa được xếp lớp
            $query = DB::table('users')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('location_user', 'users.id', '=', 'location_user.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->leftJoin('course_user', 'users.id', '=', 'course_user.user_id')
                ->join('tuitions', function($join) {
                    $join->on('users.id', '=', 'tuitions.user_id')
                         ->where('tuitions.status', '=', 'paid');
                })
                ->where('roles.name', 'student')
                ->where('users.status', 'active')
                ->whereNull('course_user.user_id') // Chưa được xếp lớp
                ->select(
                    'users.id',
                    'users.name',
                    'users.account_code',
                    'user_details.phone',
                    'location_user.location_id',
                    'tuitions.program_id',
                    'tuitions.season_id',
                    'tuitions.price',
                    'tuitions.created_at as tuition_created_at'
                )
                ->distinct();

            // Apply filters
            if ($this->filterLocationId) {
                $query->where('location_user.location_id', $this->filterLocationId);
            }

            if ($this->filterSeasonId) {
                $query->where('tuitions.season_id', $this->filterSeasonId);
            }

            if ($this->filterProgramId) {
                $query->where('tuitions.program_id', $this->filterProgramId);
            }

            if ($this->searchStudent) {
                $query->where(function($q) {
                    $q->where('users.name', 'like', '%' . $this->searchStudent . '%')
                      ->orWhere('users.account_code', 'like', '%' . $this->searchStudent . '%');
                });
            }

            $this->students = $query->get()->toArray();
        } else {
            // Lấy giáo viên và BOD
            $query = DB::table('users')
                ->join('user_details', 'users.id', '=', 'user_details.user_id')
                ->join('location_user', 'users.id', '=', 'location_user.user_id')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->whereIn('roles.name', ['TEACHER', 'BOD'])
                ->where('users.status', 'active')
                ->select(
                    'users.id',
                    'users.name',
                    'users.account_code',
                    'users.status',
                    'user_details.phone',
                    'location_user.location_id',
                    'roles.name as role_name'
                )
                ->distinct();

            // Apply filters
            if ($this->filterLocationId) {
                $query->where('location_user.location_id', $this->filterLocationId);
            }

            if ($this->searchStudent) {
                $query->where(function($q) {
                    $q->where('users.name', 'like', '%' . $this->searchStudent . '%')
                      ->orWhere('users.account_code', 'like', '%' . $this->searchStudent . '%');
                });
            }

            $this->students = $query->get()->toArray();

            }
    }

    public function loadCourses()
    {
        $query = DB::table('courses')
            ->join('seasons', 'courses.season_id', '=', 'seasons.id')
            ->join('subjects', 'courses.subject_id', '=', 'subjects.id')
            ->join('locations', 'courses.location_id', '=', 'locations.id')
            ->whereIn('seasons.status', ['ongoing', 'upcoming'])
            ->select(
                'courses.id',
                'courses.name as course_name',
                'seasons.name as season_name',
                'seasons.status as season_status',
                'subjects.name as subject_name',
                'locations.name as location_name',
                'courses.location_id',
                'courses.season_id',
                'courses.subject_id',
                'subjects.program_id'
            );

        // Đồng bộ bộ lọc với học viên
        if ($this->filterLocationId) {
            $query->where('courses.location_id', $this->filterLocationId);
        }

        if ($this->filterSeasonId) {
            $query->where('courses.season_id', $this->filterSeasonId);
        }

        if ($this->filterProgramId) {
            $query->where('subjects.program_id', $this->filterProgramId);
        }

        $this->courses = $query->get()->toArray();
    }

    public function loadSeasons()
    {
        $this->seasons = app(SeasonRepositoryInterface::class)
            ->getSeasonAvailable()
            ->toArray();
    }

    public function loadLocations()
    {
        $this->locations = Location::select('id', 'name')
            ->orderBy('id')
            ->get()
            ->toArray();
    }

    public function loadPrograms()
    {
        $this->programs = app(ProgramRepositoryInterface::class)
            ->getAllPrograms()
            ->toArray();
    }


    public function toggleStudentSelection($studentId)
    {
        if (in_array($studentId, $this->selectedStudents)) {
            $this->selectedStudents = array_diff($this->selectedStudents, [$studentId]);
        } else {
            $this->selectedStudents[] = $studentId;
        }
    }

    public function selectAllStudents()
    {
        $this->selectedStudents = array_column($this->students, 'id');
    }

    public function clearStudentSelection()
    {
        $this->selectedStudents = [];
    }

    public function updatedFilterLocationId()
    {
        $this->loadStudents();
        $this->loadCourses();
    }

    public function updatedFilterSeasonId()
    {
        $this->loadStudents();
        $this->loadCourses();
    }

    public function updatedFilterProgramId()
    {
        $this->loadStudents();
        $this->loadCourses();
    }

    public function updatedSearchStudent()
    {
        $this->loadStudents();
    }

    public function updatedUserType()
    {
        $this->loadStudents();
    }

    public function assignStudentsToCourse()
    {
        if (empty($this->selectedStudents) || !$this->selectedCourseId) {
            session()->flash('error', 'Vui lòng chọn học viên và lớp học!');
            return;
        }

        try {
            $course = collect($this->courses)->firstWhere('id', $this->selectedCourseId);
            if (!$course) {
                session()->flash('error', 'Không tìm thấy thông tin lớp học!');
                return;
            }

            // Kiểm tra xem học viên có phù hợp với lớp học không
            $validStudents = [];
            foreach ($this->selectedStudents as $studentId) {
                $student = collect($this->students)->firstWhere('id', $studentId);
                if ($student && $student->location_id == $course->location_id) {
                    $validStudents[] = $studentId;
                }
            }

            if (empty($validStudents)) {
                session()->flash('error', 'Không có học viên nào phù hợp với lớp học này!');
                return;
            }

            // Thêm học viên vào lớp
            $insertData = [];
            foreach ($validStudents as $studentId) {
                $insertData[] = [
                    'course_id' => $this->selectedCourseId,
                    'user_id' => $studentId,
                    'status' => 'active',
                    'enrolled_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('course_user')->insert($insertData);

            $count = count($validStudents);
            session()->flash('success', "Đã xếp thành công {$count} học viên vào lớp {$course->course_name}!");
            
            // Reload data
            $this->loadStudents();
            $this->selectedStudents = [];
            $this->selectedCourseId = null;

        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xếp lớp: ' . $e->getMessage());
        }
    }

    public function assignStudentToCourse($studentId, $courseId)
    {
        try {
            $course = collect($this->courses)->firstWhere('id', $courseId);
            $student = collect($this->students)->firstWhere('id', $studentId);
            
            if (!$course || !$student) {
                session()->flash('error', 'Không tìm thấy thông tin lớp học hoặc học viên!');
                return;
            }

            // Kiểm tra xem học viên có phù hợp với lớp học không
            if ($student->location_id != $course->location_id) {
                session()->flash('error', 'Học viên và lớp học không cùng cơ sở!');
                return;
            }

            // Kiểm tra xem học viên đã được xếp vào lớp này chưa
            $existing = DB::table('course_user')
                ->where('course_id', $courseId)
                ->where('user_id', $studentId)
                ->first();

            if ($existing) {
                session()->flash('error', 'Học viên đã được xếp vào lớp này rồi!');
                return;
            }

            // Thêm học viên vào lớp
            DB::table('course_user')->insert([
                'course_id' => $courseId,
                'user_id' => $studentId,
                'status' => 'active',
                'enrolled_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            session()->flash('success', "Đã xếp thành công học viên {$student->name} vào lớp {$course->course_name}!");
            
            // Reload data
            $this->loadStudents();

        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi xếp lớp: ' . $e->getMessage());
        }
    }

    #[On('assign-student-to-course')]
    public function handleAssignStudentToCourse($studentId, $courseId)
    {
        $this->assignStudentToCourse($studentId, $courseId);
    }

    public function assignTeacherToCourse($teacherId, $courseId)
    {
        try {
            $course = collect($this->courses)->firstWhere('id', $courseId);
            $teacher = collect($this->students)->firstWhere('id', $teacherId);
            
            if (!$course || !$teacher) {
                session()->flash('error', 'Không tìm thấy thông tin lớp học hoặc giáo viên!');
                return;
            }

            // Kiểm tra xem giáo viên có phù hợp với lớp học không
            if ($teacher->location_id != $course->location_id) {
                session()->flash('error', 'Giáo viên và lớp học không cùng cơ sở!');
                return;
            }

            // Kiểm tra xem giáo viên đã được gán vào lớp này chưa
            $existing = DB::table('course_user')
                ->where('course_id', $courseId)
                ->where('user_id', $teacherId)
                ->first();

            if ($existing) {
                session()->flash('error', 'Giáo viên đã được gán vào lớp này rồi!');
                return;
            }

            // Thêm giáo viên vào lớp
            DB::table('course_user')->insert([
                'course_id' => $courseId,
                'user_id' => $teacherId,
                'status' => 'active',
                'enrolled_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            session()->flash('success', "Đã gán thành công {$teacher->role_name} {$teacher->name} vào lớp {$course->course_name}!");
            
            // Reload data
            $this->loadStudents();

        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi gán giáo viên: ' . $e->getMessage());
        }
    }

    #[On('assign-teacher-to-course')]
    public function handleAssignTeacherToCourse($teacherId, $courseId)
    {
        $this->assignTeacherToCourse($teacherId, $courseId);
    }

    public function render()
    {
        return view('livewire.back.arrangement.class-assignment');
    }
}
