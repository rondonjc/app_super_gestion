@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Editar Proveedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('app.proveedor.adicionar')}}">Novo</a></li>
            <li><a href="{{route('app.proveedor')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            {{$msj??""}}
            <form method="POST" action="{{route('app.proveedor.editar',$proveedor->id)}}">
                @csrf
                <input type="text" name="nombre" value="{{$proveedor->nombre}}" placeholder="Nome" class="borda-preta" >
                {{$errors->has('nombre')?$errors->first('nombre'):""}}
                <input type="text" name="site" value="{{$proveedor->site}}" placeholder="Site" class="borda-preta" >
                {{$errors->has('site')?$errors->first('site'):""}}
                <input type="text" name="uf" value="{{$proveedor->uf}}" placeholder="Uf" class="borda-preta" >
                {{$errors->has('uf')?$errors->first('uf'):""}}
                <input type="text" name="email" value="{{$proveedor->email}}" placeholder="Email" class="borda-preta" >
                {{$errors->has('email')?$errors->first('email'):""}}
                <button type="submit" >Adicionar</button>
            </form>
        </div>
    </div>
</div>
@endsection
