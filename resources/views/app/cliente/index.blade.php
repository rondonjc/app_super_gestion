@extends('app.layouts.base')
@section('titulo','SG - Cliente')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <h1>Lista de Clientes</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('cliente.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
        <div style="width: 90%; margin-left:auto; margin-right:auto;">
            <table border="1" style="width: 100%;">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente )
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombre}}</td>
                            <td><a href="{{route('cliente.show',['cliente'=>$cliente->id])}}">Visualizar</a></td>
                            <td><a href="{{route('cliente.edit',['cliente'=>$cliente->id])}}">Editar</a></td>
                            <td>
                                <form method="POST" action="{{route('cliente.destroy',['cliente'=>$cliente->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$clientes->appends($request)->links()}}
            <br>
            Registro Actuales - {{$clientes->count()}}
            <br>
            Total de Registro - {{$clientes->total()}}
            <br>
            Primer Regrito Actual - {{$clientes->firstItem()}}
        </div>

    </div>
</div>
@endsection
