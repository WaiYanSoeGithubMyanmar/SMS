<?php

namespace App\Http\Controllers;

use App\Classes;
use App\class_section;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesController extends Controller
{
    public function index()
    {
        $classList = DB::select("SELECT c.id, c.class, s.section FROM class_sections cs INNER JOIN classes c ON cs.class_id = c.id INNER JOIN Sections s ON cs.section_id = s.id WHERE cs.is_active='yes' AND c.is_active='yes' AND cs.domain='TS' AND c.domain='TS' ORDER BY cs.class_id");
        return $classList;
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {
            //Save
            return $this->SaveClass($request);
        }
        else
        {
            //Update
            return $this->UpdateClass($request);
        }
    }

    //Save
    public function SaveClass($request)
    {
        $check = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get()->count();            
        if($check > 0)
        {
            $checkActive = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get();                
            if($checkActive[0]->is_active == 'delete')
            {
                $checkActive[0]->class = $request->input('class');
                $checkActive[0]->is_active = "yes";
                $checkActive[0]->save();

                DB::Delete('Delete from class_sections where class_id=? and domain=?',[$checkActive[0]->id],'TS');

                $classId = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get('id');
                for( $i = 0; $i < count($request->section); $i++){
                    $classsection = new class_section([
                        'class_id' => $classId[0]->id,
                        'section_id' => $request->section[$i],
                        'domain' => 'TS'
                    ]);                
                    $classsection->save();
                }
                
                return response()->json(['text' => 'Class added successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Class already exists', 'type' => 'error']);
        }
        else
        {
            $classes = new Classes([
                'class' => $request->input('class'),
                'domain' => 'TS'
            ]);    
            $classes->save();

            $classId = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get('id');
            for( $i = 0; $i < count($request->section); $i++){
                $classsection = new class_section([
                    'class_id' => $classId[0]->id,
                    'section_id' => $request->section[$i],
                    'domain' => 'TS'
                ]);
        
                $classsection->save();
            }
            return response()->json(['text' => 'Class added successfully', 'type' => 'success']);
        }
    }

    //Update
    public function UpdateClass($request)
    {
        $check = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get()->count();            
        if($check > 0)
        {
            $checkActive = Classes::where('class', $request->input('class'))->where('domain', 'TS')->get();
            $classes = Classes::where('id', $request->input('id'))->where('domain', 'TS')->get();                
            if($checkActive[0]->is_active == 'delete')
            {
                $classes[0]->class = $request->input('class');
                $classes[0]->save();
                DB::Delete('Delete from class_sections where class_id=? and domain=?',[$request->input('id'),'TS']);

                for( $i = 0; $i < count($request->section); $i++){            
                    $classsection = new class_section([
                        'class_id' => $request->input('id'),
                        'section_id' => $request->section[$i],
                        'domain' => 'TS'
                    ]);
                    $classsection->save();
                }
                return response()->json(['text' => 'Class updated successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Class already exists', 'type' => 'error']);
        }
        else
        {
            $classes = Classes::find($request->input('id'));
            $classes->class = $request->input('class');
            $classes->save();
            DB::Delete('Delete from class_sections where class_id=? and domain=?',[$request->input('id'),'TS']);

            for( $i = 0; $i < count($request->section); $i++){            
                $classsection = new class_section([
                    'class_id' => $request->input('id'),
                    'section_id' => $request->section[$i],
                    'domain' => 'TS'
                ]);
                $classsection->save();
            }
            return response()->json(['text' => 'Class updated successfully', 'type' => 'success']);
        }
    }

    public function destroy($id)
    {
        $Classes = Classes::find($id);        
        $Classes->is_active = "delete";
        $Classes->save();

        DB::Update('UPDATE class_sections SET is_active=? WHERE class_id=?',['delete', $id]);
        
        return response()->json(['text' => 'Class deleted successfully', 'type' => 'success']);
    }
}
