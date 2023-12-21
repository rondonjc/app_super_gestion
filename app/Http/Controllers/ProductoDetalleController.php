<?php

namespace App\Http\Controllers;

use App\Models\ProductoDetalle;
use App\Models\Unidad;
use Illuminate\Http\Request;

class ProductoDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidades = Unidad::all();
        return view('app.producto_detalle.create',['unidades'=>$unidades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductoDetalle::create($request->all());
        echo "Cadastro registrado exitosamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductoDetalle $productoDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductoDetalle $productoDetalle)
    {
        $unidades = Unidad::all();
        return view('app.producto_detalle.edit',['unidades'=>$unidades,"productoDetalle"=>$productoDetalle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductoDetalle $productoDetalle)
    {

        $productoDetalle->update($request->all());
        echo "Detalle editado exitosamente";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductoDetalle $productoDetalle)
    {
        //
    }
}
