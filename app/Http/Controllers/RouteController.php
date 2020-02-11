<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

class RouteController extends Controller
{
    public function index()
    {
        $route = Route::all()->toArray();
        return array_reverse($route);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {
            $request->validate([
                'route_title' => 'required'
            ]);

            $check = Route::where('route_title', $request->input('route_title'))->count(); 
            if ($check > 0)
            {
                return response()->json('Route already exists!');
            }
            else
            {
                $route = new Route([
                    'route_title' => $request->input('route_title'),
                    'fare' => $request->input('fare')
                ]);
    
                $route->save();
                return response()->json('Route added successfully');
            }
        }
        else
        {           
            $check = Route::where('route_title', $request->input('route_title'))->count(); 
            if ($check > 0)
            {
                $checkId = Route::where('route_title', $request->input('route_title'))->get(); 
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
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $route = Route::find($id);
        return response()->json($route);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $route = Route::find($id);
        $route->delete();       

        return response()->json('Session deleted successfully');
    }
}
