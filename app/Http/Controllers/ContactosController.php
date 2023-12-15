<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models AS Models;
use App\Models\SiteContacto;

class ContactosController extends Controller
{
    public function contactos(){

        return view('site.contacto');
    }

    public function guardar(Request $request){

        $request->validate([
            'nombre'=>'required|min:5|max:50',
            'telefono'=> 'required',
            'email'=> 'required|email',
            'motivo_contacto_id'=> 'required',
            'mensaje'=> 'required|max:2000',
        ],
        [   'nombre.min'=> 'El nombre debe tener mas de 5 caracteres',
            'nombre.max'=> 'El nombre debe tener menos de 50 caracteres',
            'required'=> 'El campo :attribute es requerido',
            'email'=>'Ingrese un email valido'
        ]);

        SiteContacto::create($request->all());
        return redirect()->route('site.principal');
    }
}
