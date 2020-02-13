<?php

namespace App\Http\Controllers;

use App\exams;
use App\AcademicYear;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
   
    public function index()
    {
        $exams = exams::all()->toArray();
        return array_reverse($exams);
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {          
            //Save  
            $request->validate([
                'name' => 'required'
            ]);

            $check = exams::where('name', $request->input('name'))->count();            
            if ($check > 0)
            {
                $checkActive = exams::where('name', $request->input('name'))->get();                
                if($checkActive[0]->is_active == 'delete')
                {
                    //Save Update is_active
                    $checkActive[0]->is_active = "no";
                    $checkActive[0]->save(); 
                    return response()->json('Exam added successfully');
                }
                else        return response()->json('Exam already exists!');                
            }
            else
            {   
                $exams = new exams([
                    'name' => $request->input('name'),
                    'remark'=>$request->input('remark'),
                    'session_id'=>$request->input('session_id'),
                    'is_active' => 'no'
                ]);
        
                $exams->save();
                return response()->json('Exam added successfully');
            }
        }
        else
        {       
            //Update     
            $exmas = exams::find($request->input('id'));
            $exmas->update($request->all());
            return response()->json('Exam updated successfully');
        }
    }

    
    public function show(exams $exams)
    {
        //
    }

    
    public function edit($id)
    {
        $exams = exams::find($id);
        return response()->json($exams);
    }

    
    public function update(Request $request, exams $exams)
    {
        //
    }

    
    public function destroy($id)
    {
        $exams = exams::find($id);        

        $exams->is_active = "delete";
        $exams->save();    

        return response()->json('Exam deleted successfully');
    }
}
