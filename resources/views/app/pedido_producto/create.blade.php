@extends('app.layouts.base')
@section('titulo','SG - Cliente')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Adicionar Cliente</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('cliente.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            <h4>Detalle del Pedido</h4>
            <p>ID del Pedido:{{$pedido->id}}</p>
            <p>ID del Cliente:{{$pedido->cliente_id}}</p>
            {{$msj??""}}
            <x-pedido_producto.form_crete :pedido="$pedido" :productos="$productos"/>
            <h4>Productos</h4>
            <table border="1" style="width: 100%;">
                <thead>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Fecha de Creacion</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($pedido->productos as $producto )
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->pivot->cantidad}}</td>
                            <td>{{$producto->pivot->created_at->format('d/m/Y')}}</td>
                            <td>
                                <form id="form_{{$producto->pivot->id}}" method='POST' action="{{route('pedido-producto.destroy',['pedidoProducto'=>$producto->pivot->id])}}" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{$producto->pivot->id}}').submit()" type="submit">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
