@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Editar Detalles de Producto</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Regresar</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">
        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            <h4>Producto</h4>
            <div>Nombre: {{$productoDetalle->producto->nombre}}</div>
            <br>
            <div>Descripcion: {{$productoDetalle->producto->descripcion}}</div>
            <br>
            {{$msj??""}}
            <x-producto_detalle.form_crete_edit :unidades="$unidades" :producto_detalle="$productoDetalle"/>
        </div>
    </div>
</div>
@endsection
