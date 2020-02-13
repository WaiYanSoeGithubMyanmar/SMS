<?php

namespace App\Http\Controllers;

use App\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{

    // get All Session
    public function index()
    {
        $academicyr = AcademicYear::where('domain','TS')->get()->toArray();
        return array_reverse($academicyr);
    }

    // Save and Update Session
    public function store(Request $request)
    {           
        if($request->input('id') == "")
        {          
            //Save  
            return $this->SaveSession($request);
        }
        else
        {
            //Update
            return $this->UpdateSession($request);
        }
    }

    public function SaveSession($request){
        $check = AcademicYear::where('session', $request->input('session'))->count();
        if ($check > 0)
        {
            $checkActive = AcademicYear::where('session', $request->input('session'))->get();
            if($checkActive[0]->is_active == 'delete')
            {
                //Save Update is_active
                $checkActive[0]->is_active = "no";
                $checkActive[0]->save(); 
                return response()->json(['text' => 'Session added successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Session already exists', 'type' => 'error']);
        }
        else
        {
            //Save
            $academicyr = new AcademicYear([
                'session' => $request->input('session'),
                'is_active' => 'no',
                'domain' => 'TS'
            ]);
    
            $academicyr->save();
            return response()->json(['text' => 'Session added successfully', 'type' => 'success']);
        }
    }

    public function UpdateSession($request){
        $check = AcademicYear::where('session', $request->input('session'))->count();            
        if ($check > 0)
        {
            $checkSession = AcademicYear::where('session', $request->input('session'))->get();                
            $Session = AcademicYear::where('id', $request->input('id'))->get();                
            for( $i = 0; $i < count($checkSession); $i++){                
                $a = 0;
                if($checkSession[$i]->is_active == "delete") $a = 1;
            }
            if($a == 1)
            {
                $Session[0]->session = $request->input('session');
                $Session[0]->is_active = "no";
                $Session[0]->save();               
                return response()->json(['text' => 'Session updated successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Session already exists', 'type' => 'error']);
        }
        else
        {
            $academicyr = AcademicYear::find($request->input('id'));
            $academicyr->update($request->all());                
            return response()->json(['text' => 'Session updated successfully', 'type' => 'success']);
        }
    }

    public function edit($id)
    {        
        $academicyr = AcademicYear::find($id);
        return response()->json($academicyr);
    }

    // Delete Session
    public function destroy($id)
    {
        $academicyr = AcademicYear::find($id);        

        $academicyr->is_active = "delete";
        $academicyr->save();
        
        return response()->json(['text' => 'Session deleted successfully', 'type' => 'success']);
    }
}
