<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\AcademicYear;

class RouteController extends Controller
{
    public function index()
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $route = Route::where('is_active', 'Yes')
                        ->where('domain', 'TS')->get()
                        ->where('session_id', $sessionid[0]->id)->toArray();
        return array_reverse($route);
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {
            return $this->SaveRoute($request);
        }
        else
        {           
            return $this->EditRoute($request);
        }
    }

    public function SaveRoute($request)
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $check = Route::where('route_title', $request->input('route_title'))
                        ->where('domain', 'TS')
                        ->where('session_id', $sessionid[0]->id)->count(); 
        if ($check > 0)
        {
            return response()->json('Route already exists!');
        }
        else
        {
            $route = new Route([
                'route_title' => $request->input('route_title'),
                'fare' => $request->input('fare'),
                'domain' => 'TS',
                'session_id' => $sessionid[0]->id
            ]);

            $route->save();
            return response()->json('Route added successfully');
        }
    }

    public function EditRoute($request)
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $check = Route::where('route_title', $request->input('route_title'))
                        ->where('domain', 'TS')
                        ->where('session_id', $sessionid[0]->id)->count(); 
        if ($check > 0)
        {
            $checkId = Route::where('route_title', $request->input('route_title'))
                            ->where('domain', 'TS')
                            ->where('session_id', $sessionid[0]->id)->get(); 
            if($checkId[0]->id == $request->input('id'))
            {
                $route = Route::find($request->input('id'));            
                $route->update($request->all());

                return response()->json('Route updated successfully');
            }
            return response()->json('Route already exists!');
        }
        else
        { 
            $route = Route::find($request->input('id'));            
            $route->update($request->all());

            return response()->json('Route updated successfully');
        }
    }

    public function edit($id)
    {
        $route = Route::find($id);
        return response()->json($route);
    }

    public function destroy($id)
    {
        $route = Route::find($id);
        $route->is_active = 'delete';
        $route->save();       

        return response()->json('Session deleted successfully');
    }
}
