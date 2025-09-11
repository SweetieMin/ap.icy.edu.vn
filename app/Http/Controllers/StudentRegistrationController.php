<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Repositories\Contracts\StudentRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class StudentRegistrationController extends Controller
{
    public function generate($studentId)
    {
        $student = app(StudentRepositoryInterface::class)->getStudentById($studentId);
        //return view('pdf.student-registration', ['student' => $student]);

        $pdf = Pdf::loadView('pdf.student-registration', [
            'student' => $student,
            'receptionist' => Auth::user()->name,
        ])->setPaper('a4');
        return $pdf->stream('student-registration.pdf');
    }
}
