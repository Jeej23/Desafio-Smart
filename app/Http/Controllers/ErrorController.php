<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error401(){
        return view('errors.401');
    }

    public function error404(){
        return view('errors.404');
    }

    public function error500(){
        return view('errors.500');
    }
}
