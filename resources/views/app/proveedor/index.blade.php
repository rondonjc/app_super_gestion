@extends('app.layouts.base')
@section('titulo','SG - Proveedor')
@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina2">
        <p>Proveedor</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('app.proveedor.adicionar')}}">Novo</a></li>
            <li><a href="{{route('app.proveedor')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
        <div style="width: 30%; margin-left:auto; margin-right:auto;">
            <form method="POST" action="{{route('app.proveedor.listar')}}">
                @csrf
                <input type="text" name="nombre" placeholder="Nombre" class="borda-preta" >
                <input type="text" name="site" placeholder="Site" class="borda-preta" >
                <input type="text" name="uf" placeholder="Uf" class="borda-preta" >
                <input type="text" name="email"  placeholder="Email" class="borda-preta" >
                <button type="submit" >Pesquisar</button>
            </form>
        </div>
    </div>
</div>
@endsection
