<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    //

    public function getCareers(){
       // $services = Caree::all();
        return view('career.list_fe');
    }
}
