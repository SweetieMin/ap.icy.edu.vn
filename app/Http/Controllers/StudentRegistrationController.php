<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class StudentRegistrationController extends Controller
{
    public function generate($token)
    {
        $student = User::where('token', $token)->firstOrFail();

        $pdf = Pdf::loadView('pdf.student-registration', [
            'student' => $student,
            'receptionist' => Auth::user()->name,
        ])->setPaper('a4');
        return $pdf->stream('student-registration.pdf');
    }
}
