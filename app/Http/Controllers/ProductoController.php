<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoDetalle;
use App\Models\Proveedor;
use App\Models\Unidad;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){

        $productos = Producto::with(['productoDetalle','proveedor'])->paginate(10);

        return view('app.producto.index',['productos'=>$productos,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidad::all();
        $proveedores = Proveedor::all();
        return view('app.producto.create',['unidades'=>$unidades,'proveedores'=>$proveedores]);
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
        $proveedores = Proveedor::all();
        return view('app.producto.edit',['producto'=>$producto,'unidades'=>$unidades,'proveedores'=>$proveedores]);
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
            'unidad_id'=>'required|exists:unidades,id',
            'proveedor_id'=>'required|exists:proveedores,id'
        ];

        $feedback = [
            'unidad_id.required'=>'La unidad es requerida'
        ];

        $request->validate($reglas,$feedback);

        $producto->nombre = strtoupper($request->get('nombre'));
        $producto->descripcion = strtoupper($request->get('descripcion'));
        $producto->peso = $request->get('peso');
        $producto->unidad_id = $request->get('unidad_id');
        $producto->proveedor_id = $request->get('proveedor_id');
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
