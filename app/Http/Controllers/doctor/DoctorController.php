<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor.index');
    }
    public function dashboard()
    {
        return view('doctor.doctorDashboard');
    }

}
