<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoProductoController extends Controller
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
    public function create(Pedido $pedido)
    {
        $productos = Producto::all();
        $pedido->productos;
        return view('app.pedido_producto.create',['pedido'=>$pedido,'productos'=>$productos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Pedido $pedido)
    {
        $reglas= [
            'producto_id'=>'exists:productos,id',
            'cantidad'=>'required|integer|min:1',
        ];

        $request->validate($reglas);
        /*
        $pedidoProducto = new PedidoProducto();
        $pedidoProducto->producto_id = $request->get('producto_id');
        $pedidoProducto->pedido_id = $pedido->id;
        $pedidoProducto->cantidad = $request->get('cantidad');
        $pedidoProducto->save();
        */
        $pedido->productos()
                ->attach($request->get('producto_id'),['cantidad'=>$request->get('cantidad')]);

        return redirect()->route('pedido-producto.create',['pedido'=>$pedido]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PedidoProducto $pedidoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    /*
    public function destroy(Pedido $pedido,Producto $producto)
    {
        $pedido->productos()->detach($producto->id);
        return redirect()->route('pedido-producto.create',['pedido'=>$pedido]);

    }
    */

    public function destroy(PedidoProducto $pedidoProducto)
    {
        $pedidoProducto->delete();
        $pedido = Pedido::find($pedidoProducto->pedido_id);
        return redirect()->route('pedido-producto.create',['pedido'=>$pedido]);

    }
}
