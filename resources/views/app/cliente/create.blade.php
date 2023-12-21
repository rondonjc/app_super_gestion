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
            {{$msj??""}}
            <x-cliente.form_crete_edit/>
        </div>
    </div>
</div>
@endsection
