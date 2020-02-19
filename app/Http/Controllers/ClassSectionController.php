<?php

namespace App\Http\Controllers;

use App\class_section;
use App\AcademicYear;
use App\Section;
use App\assign_subject;
use App\examSchadule;
use App\exams;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
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

    // Thein Htike Aung 
    public function Theinindex($id)
    {   $academicYearId= $this->getAcademicActiveId();
        $array = [];
        $objects= [];
        $sections = class_section::where('class_id', $id)->where('is_active','yes')->where('session_id',$academicYearId)->where('domain','TS')->get();
        
        foreach($sections as $sections){
            
            $section = Section::where('id',$sections->section_id)->where('is_active','yes')->where('session_id',$academicYearId)->where('domain','TS')->get();
            foreach($section as $section){
                array_push($array,$section);
            }
            
        }

        return $array;
    }
    public function getAcademicActiveId(){
        $academicYear = AcademicYear::where('is_active','yes')->where('domain','TS')->get();
        $academicYearId ;
        foreach($academicYear as $academicYear1){
            $academicYearId = $academicYear1->id;
        }
        return $academicYearId;
    }
    public function getAssignSub_id($arrayids){
        $academicYearId = $this->getAcademicActiveId();
        $examNames = [];
        $responseExamNames = [];
        $finalResponse = [];
        $class_section_ids=class_section::where('class_id',$arrayids[0])->where('section_id',$arrayids[2])->where('is_active','yes')->where('domain','TS')->where('session_id',$academicYearId)->get();

        foreach($class_section_ids as $class_section_ids){
        $assign_subject=assign_subject::where('class_section_id',$class_section_ids->id)->where('session_id',$academicYearId)->where('is_active','yes')->where('domain','TS')->get();
        foreach($assign_subject as $assign_subject1){
            
            $exam_schadule = examSchadule::where('assign_subject_id',$assign_subject1->id)->where('session_id',$academicYearId)->where('is_active','yes')->where('domain','TS')->get();
            foreach($exam_schadule as $exam_schadule1){
                $exams = exams::where('id',$exam_schadule1->exam_id)->get();
                foreach($exams as $exams1){
                    array_push($examNames,$exams1->name);
                }
            }
        }
        }
        $checkValue = 'aa';
        for($i=0;$i<count($examNames);$i++){
            if($examNames[$i] == $checkValue){
            }else{
                array_push($responseExamNames,$examNames[$i]);
            }
            $checkValue = $examNames[$i];
        }
        foreach($responseExamNames as $responseExamNames1){
            $exam = exams::where('name',$responseExamNames1)->where('domain','TS')->where('session_id',$academicYearId)->where('is_active','yes')->get();
            foreach($exam as $exam1){
                array_push($finalResponse,$exam1);
            }
        }
        return response($finalResponse);
        
    }
    // end Thein Htike Aung

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\class_section  $class_section
     * @return \Illuminate\Http\Response
     */
    public function show(class_section $class_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\class_section  $class_section
     * @return \Illuminate\Http\Response
     */
    public function edit(class_section $class_section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\class_section  $class_section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, class_section $class_section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\class_section  $class_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(class_section $class_section)
    {
        //
    }
}
