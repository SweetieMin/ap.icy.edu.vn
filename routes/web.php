<?php

use App\Livewire\Settings\Profile;


// Settings
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Livewire\Settings\Notification;
use App\Livewire\Back\Access\Role\Roles;

// Access
use App\Livewire\Back\Arrangement\TimeTable;
use App\Livewire\Settings\AuthenticationLogs;

// Finance
use App\Livewire\Back\Personnel\Employee\Staff;

// Personnel
use App\Livewire\Back\Finance\Bank\AccountsBank;
use App\Livewire\Back\General\Library\Libraries;
//use App\Livewire\Back\Personnel\Registration\StaffsRegistration;
//use App\Livewire\Back\Personnel\Registration\StudentsRegistration;

// Management
use App\Livewire\Back\Management\Course\Courses;
use App\Livewire\Back\Management\Season\Seasons;
use App\Livewire\Back\Personnel\Student\Students;
use App\Livewire\Back\Arrangement\ClassAssignment;

use App\Livewire\Back\General\Course\LayoutCourse;
use App\Livewire\Back\Management\Program\Programs;
use App\Livewire\Back\Management\Subject\Subjects;
use App\Livewire\Back\Management\Syllabus\Syllabi;
use App\Livewire\Back\Access\Permission\Permissions;
use App\Livewire\Back\Management\Location\Locations;
use App\Livewire\Back\Management\Test\PlacementTests;
use App\Livewire\Back\Finance\Tuition\TuitionsHistory;
use App\Livewire\Back\Finance\Tuition\TuitionsPayment;
use App\Livewire\Back\Management\Curriculum\Curricula;
use App\Http\Controllers\StudentRegistrationController;
use App\Livewire\Back\General\Dashboard\LayoutDashboard;
use App\Livewire\Back\Personnel\Service\StudentsCareLayout;
use App\Livewire\Back\Finance\Price\ProgramPricesManagement;
use App\Livewire\Back\Arrangement\Attendance\MakeUpAttendances;


Route::get('/', function () {
    return view('wellcome');
});

Route::get('dashboard', LayoutDashboard::class)->name('dashboard')->middleware(['auth', 'preventBackHistory']);

Route::prefix('admin')->middleware(['auth', 'preventBackHistory'])->name('admin.')->group(function () {

    Route::prefix('general')->name('general.')->group(function () {
        Route::get('management-course', LayoutCourse::class)->name('management-course')->middleware('checkPermission:admin.general.management-course');
        Route::get('libraries', Libraries::class)->name('libraries')->middleware('checkPermission:admin.general.libraries');
    });

    Route::prefix('management')->name('management.')->group(function () {

        Route::get('locations', Locations::class)->name('locations')->middleware('checkPermission:admin.management.locations');

        Route::get('seasons', Seasons::class)->name('seasons')->middleware('checkPermission:admin.management.seasons');

        Route::get('programs', Programs::class)->name('programs')->middleware('checkPermission:admin.management.programs');

        Route::get('subjects', Subjects::class)->name('subjects')->middleware('checkPermission:admin.management.subjects');

        Route::get('courses', Courses::class)->name('courses')->middleware('checkPermission:admin.management.courses');

        Route::get('syllabi', Syllabi::class)->name('syllabi')->middleware('checkPermission:admin.management.syllabi');

        Route::get('placement-tests', PlacementTests::class)->name('placement-tests')->middleware('checkPermission:admin.management.placement-tests');

        Route::get('curricula', Curricula::class)->name('curricula');
    });

    Route::prefix('access')->name('access.')->group(function () {

        Route::get('roles', Roles::class)->name('roles')->middleware('checkPermission:admin.access.roles');

        Route::get('permissions', Permissions::class)->name('permissions')->middleware('checkPermission:admin.access.permissions');
    });

    Route::prefix('personnel')->name('personnel.')->group(function () {

        Route::get('staff', Staff::class)->name('staff')->middleware('checkPermission:admin.personnel.staff');

        //Route::get('staff-registration', StaffsRegistration::class)->name('staff-registration');

        Route::get('students', Students::class)->name('students')->middleware('checkPermission:admin.personnel.students');

        //Route::get('student-registration', StudentsRegistration::class)->name('student-registration');

        Route::get('student-care', StudentsCareLayout::class)->name('student-care')->middleware('checkPermission:admin.personnel.student-care');
    });

    Route::prefix('finance')->name('finance.')->group(function () {

        Route::get('bank-accounts', AccountsBank::class)->name('bank-accounts')->middleware('checkPermission:admin.finance.bank-accounts');

        Route::get('tuition-history', TuitionsHistory::class)->name('tuition-history')->middleware('checkPermission:admin.finance.tuition-history');

        Route::get('tuitions-payment', TuitionsPayment::class)->name('tuitions-payment')->middleware('checkPermission:admin.finance.tuitions-payment');

        Route::get('program-prices', ProgramPricesManagement::class)->name('program-prices')->middleware('checkPermission:admin.finance.program-prices');

    });

    Route::prefix('arrangement')->name('arrangement.')->group(function () {
        Route::get('time-table', TimeTable::class)->name('time-table')->middleware('checkPermission:admin.arrangement.time-table');
        Route::get('class-assignment', ClassAssignment::class)->name('class-assignment')->middleware('checkPermission:admin.arrangement.class-assignment');
        Route::get('make-up-attendance', MakeUpAttendances::class)->name('make-up-attendance')->middleware('checkPermission:admin.arrangement.make-up-attendance');
    });

    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('settings/notification', Notification::class)->name('settings.notification');
    Route::get('settings/authentication-logs', AuthenticationLogs::class)->name('settings.authentication-logs');
});

require __DIR__ . '/auth.php';

Route::get('pdf/student-registration/{token}', [StudentRegistrationController::class, 'generate'])->name('pdf.student-registration')->middleware('auth', 'preventBackHistory');