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
