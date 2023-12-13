<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function contactos(){

        return view('site.contacto');
    }
}
