<?php

namespace App\Http\Controllers;

use App\classes;
use App\class_section;
use App\Section;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = classes::all()->toArray();
        $classsection = class_section::all()->toArray();
        return array($classes, $classsection);
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
            $request->validate([
                'class' => 'required'
            ]);
    
            $classes = new classes([
                'class' => $request->input('class')            
            ]);
    
            $classes->save();

            $classId = classes::where('class', $request->input('class'))->get('id');

            for( $i = 0; $i < count($request->section); $i++){            
                $classsection = new class_section([
                    'class_id' => $classId[0]->id,
                    'section_id' => $request->section[$i]
                ]);
        
                $classsection->save();
            }
            return response()->json('Class added successfully');
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
        //
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
        //
    }
}
