<?php

namespace App\Http\Controllers;

use App\StaffDirectory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $staffs = StaffDirectory::with('role', 'department', 'designation')->orderBy('id', 'desc')->get()->toArray();
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
            "emergency_contact_no"   => $request->emergency_contact_no,
            "marital_status"   => $request->marital_status,
            "image"   => $imageName,
            "current_address"   => $request->current_address,
            "permanent_address"   => $request->permanent_address,
            "qualification"   => $request->qualification,
            "work_exp"   => $request->work_exp,
            "note"   => $request->note,
            "password"   => $request->password,
            "epf_no"   => $request->epf_no,
            "basic_salary"   => $request->basic_salary,
            "contract_type"   => $request->contract_type,
            "work_shift"   => $request->work_shift,
            "location"   => $request->location,
            "medical_leave"   => $request->medical_leave,
            "casual_leave"   => $request->casual_leave,
            "maternity_leave"   => $request->maternity_leave,
            "account_title"   => $request->account_title,
            "bank_account_no"   => $request->bank_account_no,
            "ifsc_code"   => $request->ifsc_code,
            "bank_branch_name"   => $request->bank_branch_name,
            "facebook"   => $request->facebook,
            "twitter"   => $request->twitter,
            "instagram"   => $request->instagram,
            "linkedin"   => $request->linkedin,
            "resume"   => "",
            "joining_letter"   => "",
            "other_document"   => ".",
            "date_of_joining"   => $request->date_of_joining,
            "is_active"   => "No",
            "domain"   => "Three Stars",
        ]);
        $staffDirectory->save();
        return response()->json('The StaffDirectory successfully deleted');
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
    public function edit($id)
    {
        //
        $staffDirectory  = StaffDirectory::find($id);
        return response()->json($staffDirectory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StaffDirectory  $staffDirectory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $staffDirectory = StaffDirectory::find($id);
        $filename = public_path() . '/staff_images/' . $request->image;
        if ($filename) {
            echo "Filename";
            $staffDirectory->update([
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
                "emergency_contact_no"   => $request->emergency_contact_no,
                "marital_status"   => $request->marital_status,
                "image"   => $request->image,
                "current_address"   => $request->current_address,
                "permanent_address"   => $request->permanent_address,
                "qualification"   => $request->qualification,
                "work_exp"   => $request->work_exp,
                "note"   => $request->note,
                "password"   => $request->password,
                "epf_no"   => $request->epf_no,
                "basic_salary"   => $request->basic_salary,
                "contract_type"   => $request->contract_type,
                "work_shift"   => $request->work_shift,
                "location"   => $request->location,
                "medical_leave"   => $request->medical_leave,
                "casual_leave"   => $request->casual_leave,
                "maternity_leave"   => $request->maternity_leave,
                "account_title"   => $request->account_title,
                "bank_account_no"   => $request->bank_account_no,
                "ifsc_code"   => $request->ifsc_code,
                "bank_branch_name"   => $request->bank_branch_name,
                "facebook"   => $request->facebook,
                "twitter"   => $request->twitter,
                "instagram"   => $request->instagram,
                "linkedin"   => $request->linkedin,
                "resume"   => "",
                "joining_letter"   => "",
                "other_document"   => ".",
                "date_of_joining"   => $request->date_of_joining,
                "is_active"   => "No",
                "domain"   => "Three Stars"
            ]);
        } else {
            // File::delete($filename);
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            return response()->json($imageName);
            // $request->image->move(public_path('staff_images'), $imageName);
            // echo "a";
            // return response()->json('Staff successfully updated');

            // $staffDirectory->update([
            //     "staff_id"         => $request->staff_id,
            //     "role_id"          => $request->role_id,
            //     "designation_id"   => $request->designation_id,
            //     "department_id"    => $request->department_id,
            //     "name"             => $request->name,
            //     "father_name"   => $request->father_name,
            //     "mother_name"   => $request->mother_name,
            //     "email"         => $request->email,
            //     "gender"   => $request->gender,
            //     "dob"   => $request->dob,
            //     "phone"   => $request->phone,
            //     "emergency_contact_no"   => $request->emergency_contact_no,
            //     "marital_status"   => $request->marital_status,
            //     "image"   => $imageName,
            //     "current_address"   => $request->current_address,
            //     "permanent_address"   => $request->permanent_address,
            //     "qualification"   => $request->qualification,
            //     "work_exp"   => $request->work_exp,
            //     "note"   => $request->note,
            //     "password"   => $request->password,
            //     "epf_no"   => $request->epf_no,
            //     "basic_salary"   => $request->basic_salary,
            //     "contract_type"   => $request->contract_type,
            //     "work_shift"   => $request->work_shift,
            //     "location"   => $request->location,
            //     "medical_leave"   => $request->medical_leave,
            //     "casual_leave"   => $request->casual_leave,
            //     "maternity_leave"   => $request->maternity_leave,
            //     "account_title"   => $request->account_title,
            //     "bank_account_no"   => $request->bank_account_no,
            //     "ifsc_code"   => $request->ifsc_code,
            //     "bank_branch_name"   => $request->bank_branch_name,
            //     "facebook"   => $request->facebook,
            //     "twitter"   => $request->twitter,
            //     "instagram"   => $request->instagram,
            //     "linkedin"   => $request->linkedin,
            //     "resume"   => "",
            //     "joining_letter"   => "",
            //     "other_document"   => ".",
            //     "date_of_joining"   => $request->date_of_joining,
            //     "is_active"   => "No",
            //     "domain"   => "Three Stars"
            // ]);
        }
        // $staffDirectory = StaffDirectory::find($id);

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
