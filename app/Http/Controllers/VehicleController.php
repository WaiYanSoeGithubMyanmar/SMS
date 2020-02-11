<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all()->toArray();
        return array_reverse($vehicle);
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
                'vehicle_no' => 'required'
            ]);

            $check = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->count(); 
            if ($check > 0)
            {
                return response()->json('Vehicle already exists!');
            }
            else
            {
                $vehicle = new Vehicle([
                    'vehicle_no' => $request->input('vehicle_no'),
                    'vehicle_model' => $request->input('vehicle_model'),
                    'driver_name' => $request->input('driver_name'),
                    'driver_licence' => $request->input('driver_licence'),
                    'driver_contact' => $request->input('driver_contact'),
                    'note' => $request->input('note')
                ]);
    
                $vehicle->save();
                return response()->json('Vehicle added successfully');
            }
        }
        else
        {           
            $check = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->count(); 
            if ($check > 0)
            {
                $checkId = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->get(); 
                if($checkId[0]->id == $request->input('id'))
                {
                    $vehicle = Vehicle::find($request->input('id'));            
                    $vehicle->update($request->all());

                    return response()->json('Vehicle updated successfully');
                }
                return response()->json('Vehicle already exists!');
            }
            else
            { 
                $vehicle = Vehicle::find($request->input('id'));            
                $vehicle->update($request->all());

                return response()->json('Vehicle updated successfully');
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return response()->json($vehicle);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();       

        return response()->json('Vehicle deleted successfully');
    }
}
