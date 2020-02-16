<?php

namespace App\Http\Controllers;

use App\StaffDirectory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = StaffDirectory::with('role', 'department','designation')->orderBy('id', 'desc')->get()->toArray();
        return array_reverse($staffs);
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
          /**
         * NAME OF IMAGE 
         */
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('staff_images'), $imageName);
        $staffDirectory = new StaffDirectory([
            "staff_id"         => $request->staff_id,
            "role_id"          => $request->role_id,
            "designation_id"   => $request->designation_id,
            "department_id"    => $request->department_id,
            "name"             => $request->name,
            "father_name"   => $request->father_name,
            "mother_name"   => $request->mother_name,
            "email"         => $request->email,
            "gender"   => $request->gender,
            "dob"   => $request->dob,
            "phone"   => $request->phone,
            // "emergency_contact_no"   => "$request->input('emergency_contact_no')",
            // "marital_status"   => $request->input('marital_status'),
            "image"   => $imageName,
            // "current_address"   => $request->input('current_address'),
            // "permanent_address"   => $request->input('permanent_address'),
            // "qualification"   => $request->input('qualification'),
            // "work_exp"   => $request->input('work_exp'),
            // "note"   => $request->input('note'),
            // "password"   => $request->input('password'),
            // "epf_no"   => $request->input('epf_no'),
            // "basic_salary"   => $request->input('basic_salary'),
            // "contract_type"   => $request->input('contract_type'),
            // "work_shift"   => $request->input('work_shift'),
            // "location"   => $request->input('location'),
            // "medical_leave"   => $request->input('medical_leave'),
            // "casual_leave"   => $request->input('casual_leave'),
            // "maternity_leave"   => $request->input('maternity_leave'),
            // "account_title"   => $request->input('account_title'),
            // "bank_account_no"   => $request->input('bank_account_no'),
            // "ifsc_code"   => $request->input('ifsc_code'),
            // "bank_branch_name"   => $request->input('bank_branch_name'),
            // "facebook"   => $request->input('facebook'),
            // "twitter"   => $request->input('twitter'),
            // "instagram"   => $request->input('instagram'),
            // "linkedin"   => $request->input('linkedin'),
            // "resume"   => "",
            // "joining_letter"   => "",
            // "other_document"   => ".",
            // "date_of_joining"   => $request->input('date_of_joining'),
            "is_active"   => "No",
            "domain"   => "Three Stars",
        ]);
        $staffDirectory->save();
        return response()->json('The RoomType successfully deleted');
        // echo $request->image;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StaffDirectory  $staffDirectory
     * @return \Illuminate\Http\Response
     */
    public function show(StaffDirectory $staffDirectory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StaffDirectory  $staffDirectory
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffDirectory $staffDirectory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffDirectory  $staffDirectory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffDirectory $staffDirectory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StaffDirectory  $staffDirectory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffDirectory $staffDirectory)
    {
        //
    }
}
