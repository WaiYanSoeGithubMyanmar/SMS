<?php

namespace App\Http\Controllers;

use App\student_sibling;
use Illuminate\Http\Request;

class StudentSiblingController extends Controller
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
        $sibling = new student_sibling([
            'admission_no' => $request->input('admission_no'),
            'sibling_admission_no' =>$request->input('sibling_admission_no'),
            'is_active'=>$request->input('is_active'),
            'domain'=>$request->input('domain'),
            'session_id'=>$request->input('session_id'),
        ]);
        $sibling->save();
        return response()->json("Sibling Save Success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student_sibling  $student_sibling
     * @return \Illuminate\Http\Response
     */
    public function show(student_sibling $student_sibling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student_sibling  $student_sibling
     * @return \Illuminate\Http\Response
     */
    public function edit(student_sibling $student_sibling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student_sibling  $student_sibling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_sibling $student_sibling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student_sibling  $student_sibling
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_sibling $student_sibling)
    {
        //
    }
}
