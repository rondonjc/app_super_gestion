@extends('app.layouts.base')
@section('titulo','SG - Producto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <h1>Lista de Productos</h1>
    </div>

    <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
        <div style="width: 90%; margin-left:auto; margin-right:auto;">
            <table border="1" style="width: 100%;">
                <thead>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Peso</th>
                    <th>Unidad</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($productos as $producto )
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->peso}}</td>
                            <td>{{$producto->unidad_id}}</td>
                            <td><a href="{{route('app.proveedor.editar',$producto->id)}}">Editar</a></td>
                            <td><a href="{{route('app.proveedor.eliminar',$producto->id)}}">Eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$productos->appends($request)->links()}}
            <br>
            Registro Actuales - {{$productos->count()}}
            <br>
            Total de Registro - {{$productos->total()}}
            <br>
            Primer Regrito Actual - {{$productos->firstItem()}}
        </div>

    </div>
</div>
@endsection
