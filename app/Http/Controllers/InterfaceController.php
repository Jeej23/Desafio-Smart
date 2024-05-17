<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function static(){
        return view('dashboard.interface.static');
    }

    public function light(){
        return view('dashboard.interface.light');
    }
}
