<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Unidad;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){

        $productos = Producto::paginate(10);
        return view('app.producto.index',['productos'=>$productos,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidad::all();
        return view('app.producto.create',['unidades'=>$unidades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reglas= [
            'nombre'=>'required|min:3|max:40',
            'descripcion'=>'required|min:10|max:250',
            'peso'=>'required|numeric',
            'unidad_id'=>'required|exists:unidades,id'
        ];

        $feedback = [
            'unidad_id.required'=>'La unidad es requerida'
        ];

        $request->validate($reglas,$feedback);

        $producto = new Producto();
        $producto->nombre = strtoupper($request->get('nombre'));
        $producto->descripcion = strtoupper($request->get('descripcion'));
        $producto->peso = $request->get('peso');
        $producto->unidad_id = $request->get('unidad_id');

        $producto->save();

        return redirect()->route('producto.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        $unidades = Unidad::all();
        return view('app.producto.show',['producto'=>$producto,'unidades'=>$unidades]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $unidades = Unidad::all();
        return view('app.producto.edit',['producto'=>$producto,'unidades'=>$unidades]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $reglas= [
            'nombre'=>'required|min:3|max:40',
            'descripcion'=>'required|min:10|max:250',
            'peso'=>'required|numeric',
            'unidad_id'=>'required|exists:unidades,id'
        ];

        $feedback = [
            'unidad_id.required'=>'La unidad es requerida'
        ];

        $request->validate($reglas,$feedback);

        $producto->nombre = strtoupper($request->get('nombre'));
        $producto->descripcion = strtoupper($request->get('descripcion'));
        $producto->peso = $request->get('peso');
        $producto->unidad_id = $request->get('unidad_id');
        $producto->save();

        return redirect()->route('producto.show',['producto'=>$producto]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
