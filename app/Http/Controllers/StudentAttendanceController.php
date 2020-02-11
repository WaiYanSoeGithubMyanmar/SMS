<?php

namespace App\Http\Controllers;

use App\student_attendance;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'date' => 'required',
        //   ]);
        print_r ($request->studObj);
        for($i=0;$i<count($request->studObj);$i++){
            // print_r($request->studObj[$i]['admission_no']);
            $student_attendances = new student_attendances([
                'admission_no'=> $request->studObj[$i]['admission_no'],
                'date'=> $request->studObj[$i]['date'],
                'attendance_type_id'=> $request->studObj[$i]['attendance_type_id'],
                'biometric_attendance'=> $request->studObj[$i]['biometric_attendance'],
                'remark'=> $request->studObj[$i]['remark'],
                'is_active'=> $request->studObj[$i]['is_active'],
            ]);
            $student_attendances->save();
        }
        return response()->json('Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student_attendances  $student_attendances
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$date)
    {
        // $student_attendance = new student_attendances::where('date',$date)->get()->toArray();
        $student_attendance = student_attendances::where('date',$date)->get()->toArray();
        return array_reverse($student_attendance);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student_attendances  $student_attendances
     * @return \Illuminate\Http\Response
     */
    public function edit(student_attendances $student_attendances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student_attendances  $student_attendances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_attendances $student_attendances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student_attendances  $student_attendances
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_attendances $student_attendances)
    {
        //
    }
}
