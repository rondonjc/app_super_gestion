<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indext(Request $request){
        return view('app.home');
    }
}
