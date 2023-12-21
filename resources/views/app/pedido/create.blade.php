@extends('app.layouts.base')
@section('titulo','SG - Pedido')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Adicionar Pedido</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('pedido.create')}}">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center; display: flex; justify-content: center">

        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            {{$msj??""}}
            <x-pedido.form_crete_edit :clientes="$clientes"/>
        </div>
    </div>
</div>
@endsection
