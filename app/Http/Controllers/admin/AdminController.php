<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminDashboard (){
        $appointment=DB::table('serials')
            ->where('serials.status','=','In Progress')
            ->join('appointments','appointments.id','=','serials.appointment_id')
            ->join('doctors','doctors.id','=','serials.doctor_id')
            ->get();
        $dctr=Doctor::all();
       // dd($appointment);
        return view('admin.adminDashboard',['appointment'=>$appointment,'doctor'=>$dctr]);

    }

    public function addAppointment (){
        return view('admin.addAppointment');

    }

    public function addBlog (){
        return view('admin.addBlog');

    }

    public function addDepartment (){
        return view('admin.addDepartment');

    }

    public function addDoctor (){
        return view('admin.addDoctor');

    }

    public function addPatient (){
        return view('admin.addPatient');

    }

    public function addSchedule (){
        return view('admin.addSchedule');

    }

    public function appointment (){
        $appointment=DB::table('serials')
            ->join('appointments','appointments.id','=','serials.appointment_id')
            ->join('doctors','doctors.id','=','serials.doctor_id')
            ->get();
        return view('admin.appointments',['appointment'=>$appointment]);

    }

    public function blog (){
        return view('admin.blog');

    }

    public function blogDetails (){
        return view('admin.blogDetails');

    }

    public function chat (){
        return view('admin.chat');

    }
    public function departments (){
        return view('admin.departments');

    }
    public function doctors (){
            $dctr=Doctor::all();
        return view('admin.doctors',['doctor'=>$dctr]);

    }
    public function editBlog (){
        return view('admin.editBlog');

    }
    public function editDoctor (){
        return view('admin.editDoctor');

    }
    public function editProfile (){
        return view('admin.editProfile');

    }
    public function main (){
        return view('admin.main');

    }
    public function patients (){
        return view('admin.patients');

    }
    public function schedule (){
        return view('admin.schedule');

    }
    public function settings (){
        return view('admin.settings');

    }
    public function voiceCall (){
        return view('admin.voiceCall');

    }

}
