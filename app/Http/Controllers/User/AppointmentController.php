<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Schema\Schema;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment=DB::table('doctors')
            ->join('appointments','appointments.doctor_id','=','doctors.id')
            ->where('appointments.user_id',Auth::id())
            ->get();
        //dd($appointment);
        return view('user.myAppointment',compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $appointment=new Appointment();
        $appointment->user_id=Auth::id();
        $appointment->name=$request->name;
        $appointment->email=$request->email;
        $appointment->phone=$request->phone;
        $appointment->doctor_id=$request->doctor;
        $appointment->date=$request->date;
        $appointment->message=$request->message;
        $appointment->serial=$request->serial;
        $appointment->room=$request->room;
        $appointment->status=$request->status;
        $appointment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
