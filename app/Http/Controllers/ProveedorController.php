<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index(Request $request){
        return view('app.proveedor.index');
    }

    public function listar(Request $request){

        $proveedores = Proveedor::where('nombre','like','%'.$request->input('nombre').'%')
        ->where('site','like','%'.$request->input('site').'%')
        ->where('uf','like','%'.$request->input('uf').'%')
        ->where('email','like','%'.$request->input('email').'%')
        ->paginate(2);

        return view('app.proveedor.listar',['proveedores'=>$proveedores,'request'=>$request->all()]);
    }

    public function adicionar(Request $request){

        $msj = '';
        if($request->input('_token')!=""){
            $reglas= [
                'nombre'=>'required|min:3|max:40',
                'site'=>'required',
                'uf'=>'required|min:2|max:2',
                'email'=>'email'
            ];

            $feedback = [
                'required'=>'El campo :attribute es requerido',
                'nombre.min'=>'El campo nombre debe tene min 3 caracteres',
                'nombre.max'=>'El campo nombre debe tene max 40 caracteres',
                'uf.max'=>'El campo uf debe tene max 2 caracteres',
                'uf.max'=>'El campo uf debe tene max 2 caracteres',
                'email'=>'Debe colocar um email valido'
            ];

            $request->validate($reglas,$feedback);

            $proveedor = new Proveedor();
            $proveedor->create($request->all());
            $msj = "Proveedor registrado con exito!";
        }

        return view('app.proveedor.adicionar',['msj'=>$msj]);
    }

    public function editar(Request $request,$id){

        $msj = '';
        $proveedor = Proveedor::find($id);

        if($request->input('_token')!=""){
            $reglas= [
                'nombre'=>'required|min:3|max:40',
                'site'=>'required',
                'uf'=>'required|min:2|max:2',
                'email'=>'email'
            ];

            $feedback = [
                'required'=>'El campo :attribute es requerido',
                'nombre.min'=>'El campo nombre debe tene min 3 caracteres',
                'nombre.max'=>'El campo nombre debe tene max 40 caracteres',
                'uf.max'=>'El campo uf debe tene max 2 caracteres',
                'uf.max'=>'El campo uf debe tene max 2 caracteres',
                'email'=>'Debe colocar um email valido'
            ];

            $request->validate($reglas,$feedback);
            $update = $proveedor->update($request->except('_token'));
            if($update){
                $msj = "Proveedor editado con exito!";
            }else{
                $msj = "Error al editar el Proveedor";
            }

        }

        return view('app.proveedor.editar',['proveedor'=>$proveedor,'msj'=>$msj]);
    }

    public function eliminar($id){

        $msj = '';
        $proveedor = Proveedor::find($id);
        $proveedor->delete();

        return redirect()->route('app.proveedor');

    }
}
