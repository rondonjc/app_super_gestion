@extends('app.layouts.base')
@section('titulo','SG - Producto')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <h1>Lista de Productos</h1>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('producto.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
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
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($productos as $producto )
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->peso}}</td>
                            <td>{{$producto->unidad_id}}</td>
                            <td><a href="{{route('producto.show',['producto'=>$producto->id])}}">Visualizar</a></td>
                            <td><a href="{{route('producto.edit',['producto'=>$producto->id])}}">Editar</a></td>
                            <td>
                                <form method="POST" action="{{route('producto.destroy',['producto'=>$producto->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
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
