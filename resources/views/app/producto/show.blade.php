@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Especificaciones de Producto</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('producto.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            <table border="1" style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <th>ID</th><td>{{$producto->id}}</td>
                </tr>
                <tr>
                    <th>Nombre</th><td>{{$producto->nombre}}</td>
                </tr>
                <tr>
                    <th>Descripcion</th><td>{{$producto->descripcion}}</td>
                </tr>
                <tr>
                    <th>Peso</th><td>{{$producto->peso}}</td>
                </tr>
                <tr>
                    <th>Unidad</th><td>{{$producto->unidad_id}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
