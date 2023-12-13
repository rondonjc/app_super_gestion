<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosotrosController extends Controller
{
    public function sobreNosotros(){

        return view('site.sobre-nosotros');
    }
}
