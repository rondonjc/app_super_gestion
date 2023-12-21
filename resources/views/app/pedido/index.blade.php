@extends('app.layouts.base')
@section('titulo','SG - Pedido')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <h1>Lista de Pedidos</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('pedido.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
        <div style="width: 90%; margin-left:auto; margin-right:auto;">
            <table border="1" style="width: 100%;">
                <thead>
                    <th>PEDIDO</th>
                    <th>CLIENTE ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido )
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->cliente_id}}</td>
                            <td><a href="{{route('pedido-producto.create',['pedido'=>$pedido->id])}}">Adiciona Productos</a></td>
                            <td><a href="{{route('pedido.show',['pedido'=>$pedido->id])}}">Visualizar</a></td>
                            <td><a href="{{route('pedido.edit',['pedido'=>$pedido->id])}}">Editar</a></td>
                            <td>
                                <form method="POST" action="{{route('pedido.destroy',['pedido'=>$pedido->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pedidos->appends($request)->links()}}
            <br>
            Registro Actuales - {{$pedidos->count()}}
            <br>
            Total de Registro - {{$pedidos->total()}}
            <br>
            Primer Regrito Actual - {{$pedidos->firstItem()}}
        </div>

    </div>
</div>
@endsection
