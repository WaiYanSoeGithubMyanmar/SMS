<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function upload(Request $req){
        echo $req->file('image')->store('public');
        echo $req->file('father_photo')->store('public');
        echo $req->file('mother_photo')->store('public');
        echo $req->file('guardian_photo')->store('public');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $check = DB::select('select * from students where admission_no =?',[$request->input('admission_no')]);
          if($check){
            return response()->json("This data already exists.");
          }else{
            $student = new student([
                'admission_no'=>$request->input('admission_no'),
                'name'=>$request->input('name'),
                'image'=>$request->input('image_name'),
                'mobileno'=>$request->input('mobileno'),
                'email'=>$request->input('email'),
                'gender'=>$request->input('gender'),
                'dob'=>$request->input('dob'),
                'religion'=>$request->input('religion'),
                'blood_group'=>$request->input('blood_group'),
                'height'=>$request->input('height'),
                'weight'=>$request->input('weight'),
  
                'roll_no'=>$request->input('roll_no'),
                'class_sections_id'=>$request->input('class_sections_id'),
                'admission_date'=>$request->input('admission_date'),
                'register_date'=>$request->input('register_date'),
                'father_name'=>$request->input('father_name'),
                'father_phone'=>$request->input('father_phone'),
                'father_nrc'=>$request->input('father_nrc'),
                'father_job'=>$request->input('father_job'),
                'father_photo'=>$request->input('father_photo_name'),
  
                'mother_name'=>$request->input('mother_name'),
                'mother_phone'=>$request->input('mother_phone'),
                'mother_nrc'=>$request->input('mother_nrc'),
                'mother_job'=>$request->input('mother_job'),
                'mother_photo'=>$request->input('mother_photo_name'),
  
                'guardian_name'=>$request->input('guardian_name'),
                'guardian_nrc'=>$request->input('guardian_nrc'),
                'guardian_phone'=>$request->input('guardian_phone'),
                'guardian_job'=>$request->input('guardian_job'),
                'guardian_relation'=>$request->input('guardian_relation'),
                'guardian_email'=>$request->input('guardian_email'),
                'guardian_photo'=>$request->input('guardian_photo_name'),
                'guardian_address'=>$request->input('guardian_address'),
                'current_address'=>$request->input('current_address'),
                'permanent_address'=>$request->input('permanent_address'),
                
                'previous_school'=>$request->input('previous_school'),
                'route_id'=>$request->input('route_id'),
                'hostel_room_id'=>$request->input('hostel_room_id'),
                'session_start'=>$request->input('session_start'),
                'session_end'=>$request->input('session_end'),
                'note'=>$request->input('note'),
                'disable_at'=>$request->input('disable_at'),
                'is_active'=>$request->input('is_active'),
            ]);
            $student->save();
            return response()->json("Save Success");
          }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
