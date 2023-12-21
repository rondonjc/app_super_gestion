@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Lista de Proveedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('app.proveedor.adicionar')}}">Novo</a></li>
            <li><a href="{{route('app.proveedor')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
        <div style="width: 90%; margin-left:auto; margin-right:auto;">
            <table border="1" style="width: 100%;">
                <thead>
                    <th>Nombre</th>
                    <th>Site</th>
                    <th>UF</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor )
                        <tr>
                            <td>{{$proveedor->nombre}}</td>
                            <td>{{$proveedor->site}}</td>
                            <td>{{$proveedor->uf}}</td>
                            <td>{{$proveedor->email}}</td>
                            <td><a href="{{route('app.proveedor.editar',$proveedor->id)}}">Editar</a></td>
                            <td><a href="{{route('app.proveedor.eliminar',$proveedor->id)}}">Eliminar</a></td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <h5>Lista de Productos</h5>
                                <table border="1" style="width: 100%; margin:10px;">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Peso</th>
                                        <th>Unidad</th>
                                        <th>Anchura</th>
                                        <th>Largura</th>
                                        <th>Altura</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($proveedor->productos as $producto )
                                            <tr>
                                                <td>{{$producto->nombre}}</td>
                                                <td>{{$producto->descripcion}}</td>
                                                <td>{{$producto->peso}}</td>
                                                <td>{{$producto->unidad_id}}</td>
                                                <td>{{$producto->productoDetalle->anchura??''}}</td>
                                                <td>{{$producto->productoDetalle->largura??''}}</td>
                                                <td>{{$producto->productoDetalle->altura??''}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$proveedores->appends($request)->links()}}
            <br>
            Registro Actuales - {{$proveedores->count()}}
            <br>
            Total de Registro - {{$proveedores->total()}}
            <br>
            Primer Regrito Actual - {{$proveedores->firstItem()}}
        </div>
    </div>
</div>
@endsection
