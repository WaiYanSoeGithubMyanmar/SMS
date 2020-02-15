<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::where('is_active', 'Yes')->where('domain', 'TS')->get()->toArray();
        return array_reverse($vehicle);
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {
            return $this->SaveVehicle($request);
        }
        else
        {           
            return $this->EditVehicle($request);
        }
    }

    public function SaveVehicle($request)
    {
        $check = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->where('domain', 'TS')->count(); 
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
                'note' => $request->input('note'),
                'domain' => 'TS'
            ]);

            $vehicle->save();
            return response()->json('Vehicle added successfully');
        }
    }

    public function EditVehicle($request)
    {
        $check = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->where('domain', 'TS')->count(); 
        if ($check > 0)
        {
            $checkId = Vehicle::where('vehicle_no', $request->input('vehicle_no'))->where('domain', 'TS')->get(); 
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

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return response()->json($vehicle);
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->is_active = 'delete';
        $vehicle->save();  

        return response()->json('Vehicle deleted successfully');
    }
}
