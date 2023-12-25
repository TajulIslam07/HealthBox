<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

    public function index()
    {

      $dctr=DB::table('users')
           ->where('users.id',Auth::id())
           ->join('doctors','doctors.user_id','=','users.id')
            ->get();

        return view('doctor.index',compact('dctr'));



    }
    public function dashboard()
    {
        return view('doctor.doctorDashboard');
    }
    public function detailsPrescription()
    {
        return view('doctor.detailsPrescription');
    }
    public function allPatient()
    {
        return view('doctor.allPatient');
    }
    public function allDoctors()
    {
        $dctr=Doctor::all();
        return view('doctor.allDoctors',compact('dctr'));
    }

    public function editDoctors(){
        $dctr=DB::table('users')
            ->where('users.id',Auth::id())
            ->join('doctors','doctors.user_id','=','users.id')
            ->get();

        return view('doctor.editDoctor',['dctr'=>$dctr]);
    }
    public function editDoctorsUpload(Request $request){

       $dctr1= Doctor::find(Auth::id());
       if (!$dctr1){
           $dctr1=new Doctor();
           $dctr1->user_id=Auth::id();
       }
           $dctr1->name=$request->name;
           $dctr1->speciality=$request->speciality;
           $dctr1->description=$request->description;
           $dctr1->medical_degree=$request->medical_degree;
           $dctr1->phone=$request->phone;
           $dctr1->email=$request->email;
           if ($request->hasfile('image')){
               $ImageName=time().'.'.$request->image->extension();
               $request->image->move(public_path('doctor/images/profile'), $ImageName);
               $dctr1->image=$ImageName;
           }

           $dctr1->save();
           return redirect()->back();

    }

}
