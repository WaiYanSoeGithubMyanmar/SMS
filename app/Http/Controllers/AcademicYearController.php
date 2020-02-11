<?php

namespace App\Http\Controllers;

use App\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicyr = AcademicYear::all()->toArray();
        // $academicyr = AcademicYear::where('is_active','<>','delete')->get();
        return array_reverse($academicyr);
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
        if($request->input('id') == "")
        {          
            //Save  
            $request->validate([
                'session' => 'required'
            ]);

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
                $academicyr = new AcademicYear([
                    'session' => $request->input('session'),
                    'is_active' => 'no'
                ]);
        
                $academicyr->save();
                return response()->json(['text' => 'Session added successfully', 'type' => 'success']);
            }
        }
        else
        {       
            //Update     
            $academicyr = AcademicYear::find($request->input('id'));
            $academicyr->update($request->all());

            return response()->json('Session updated successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $academicyr = AcademicYear::find($id);
        return response()->json($academicyr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academicyr = AcademicYear::find($id);        

        $academicyr->is_active = "delete";
        $academicyr->save();        
        
        return response()->json(['text' => 'Session deleted successfully', 'type' => 'success']);
    }
}
