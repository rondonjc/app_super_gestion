@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Adicionar Detalles de Producto</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Regresar</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            {{$msj??""}}
            <x-producto_detalle.form_crete_edit :unidades="$unidades" />
        </div>
    </div>
</div>
@endsection
