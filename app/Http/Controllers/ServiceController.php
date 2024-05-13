<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //

    public function getServices(){
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function postService(Request $req){
        try {
            
            if($req->service_id){
                $services = Service::findOrFail($req->service_id);
                $services->update($req->all());
                return response()->json(['message' => 'Service updated successfully']);
            }
            else{
                $services->create($req->all());
                return response()->json(['message' => 'Service updated successfully']);
            }
            
            
        } catch (Exception $e) {
            // Handle the exception
            return response()->json(['error' => 'Failed to update user: ' . $e->getMessage()], 500);
        }
    }

}
