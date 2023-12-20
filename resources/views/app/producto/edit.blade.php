@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Editar Producto</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('producto.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            {{$msj??""}}
            <form method="POST" action="{{route('producto.update',['producto'=>$producto->id])}}">
                @csrf
                @method('PUT')
                <input type="text" name="nombre" value="{{$producto->nombre??old('nombre')}}" placeholder="Nombre" class="borda-preta" >
                {{$errors->has('nombre')?$errors->first('nombre'):""}}
                <textarea name="descripcion" class="borda-preta" placeholder="Descripcion">{{$producto->descripcion??old('descripcion')}}</textarea>
                {{$errors->has('descripcion')?$errors->first('descripcion'):""}}
                <input type="text" name="peso" value="{{$producto->peso??old('peso')}}" placeholder="Peso" class="borda-preta" >
                {{$errors->has('peso')?$errors->first('peso'):""}}
                <select name="unidad_id" class="borda-preta">
                    <option value="">-- Seleccione la unidad de medida --</option>
                    @foreach ($unidades as $unidad)
                        <option {{($producto->unidad_id??old('unidad_id')==$unidad->id)?'selected':''}} value="{{$unidad->id}}">{{$unidad->descripcion}}</option>
                    @endforeach
                </select>
                {{$errors->has('unidad_id')?$errors->first('unidad_id'):""}}
                <button type="submit" >Adicionar</button>
            </form>
        </div>
    </div>
</div>
@endsection
