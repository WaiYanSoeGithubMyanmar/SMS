<?php

namespace App\Http\Controllers;

use App\vehicle_routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AcademicYear;

class VehicleRoutesController extends Controller
{
    public function index()
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $vehicleroute = vehicle_routes::where('is_active', 'yes')
                                        ->where('domain', 'TS')
                                        ->where('session_id', $sessionid[0]->id)
                                        ->orderBy('id', 'DESC')->get()->toArray();
        return array_reverse($vehicleroute);
    }

    public function store(Request $request)
    {
        if($request->input('id') == "")
        {
            //Save            
            return $this->SaveVehicleRoutes($request);
        }
        else
        {
            //Update
            return $this->UpdateVehicleRoutes($request);
        }
    }

    public function SaveVehicleRoutes($request)
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $check = vehicle_routes::where('route_id', $request->input('routeid'))
                                ->where('domain', 'TS')
                                ->where('session_id', $sessionid[0]->id)->get()->count();
        if($check > 0)
        {
            $checkActive = vehicle_routes::where('route_id', $request->input('routeid'))
                                        ->where('domain', 'TS')
                                        ->where('session_id', $sessionid[0]->id)->get();
            if($checkActive[0]->is_active == 'delete')
            {
                //Save Update is_active
                $checkActive[0]->is_active = "Yes";
                $checkActive[0]->vehicle_id = $request->input('vehicleno');
                $checkActive[0]->save(); 
                return response()->json(['text' => 'Vehicle Route added successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Vehicle Route already exists', 'type' => 'error']);
        }
        else
        {
            $vehicleroute = new vehicle_routes([
                'route_id' => $request->input('routeid'),
                'vehicle_id' => $request->input('vehicleno'),                    
                'domain' => 'TS',
                'session_id' => $sessionid[0]->id
            ]);
    
            $vehicleroute->save();            
            return response()->json(['text' => 'Vehicle Route added successfully', 'type' => 'success']);
        }
    }

    public function UpdateVehicleRoutes($request)
    {
        $sessionid = AcademicYear::where('is_active','yes')->where('domain','TS')->get('id');
        $check = vehicle_routes::where('route_id', $request->input('routeid'))
                                ->where('domain', 'TS')
                                ->where('session_id', $sessionid[0]->id)->get()->count();
        if($check > 0)
        {
            $checkActive = vehicle_routes::where('route_id', $request->input('routeid'))
                                            ->where('domain', 'TS')
                                            ->where('session_id', $sessionid[0]->id)->get();
            $vehicleRoute = vehicle_routes::where('id', $request->input('id'))->get();
            if($checkActive[0]->is_active == 'delete' || $vehicleRoute[0]->route_id == $request->input('routeid'))
            {
                //Save Update is_active
                $vehicleRoute[0]->route_id = $request->input('routeid');
                $vehicleRoute[0]->vehicle_id = $request->input('vehicleno');
                $vehicleRoute[0]->save(); 
                return response()->json(['text' => 'Vehicle Route updated successfully', 'type' => 'success']);
            }
            else        return response()->json(['text' => 'Vehicle Route already exists', 'type' => 'error']);
        }
        else
        {
            $vehicleroute = vehicle_routes::find($request->input('id'));
            $vehicleroute->route_id = $request->input('routeid');
            $vehicleroute->vehicle_id = $request->input('vehicleno');        
            $vehicleroute->save();
            return response()->json(['text' => 'Vehicle Route updated successfully', 'type' => 'success']);
        }        
    }

    public function destroy($id)
    {
        $vehicleroute = vehicle_routes::find($id);
        $vehicleroute->is_active = "delete";
        $vehicleroute->save();
        
        return response()->json(['text' => 'Vehicle Route deleted successfully', 'type' => 'success']);
    }
}
