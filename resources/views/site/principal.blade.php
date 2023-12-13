@extends('site.layouts.base')
@section('titulo','Bienvenido')
@section('conteudo')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="chamada">
                    <img src="/img/check.png">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="img/check.png">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="img/player_video.jpg">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <x-form_contacto class="borda-branca">
                    <h1>Contacto</h1>
                    <p>En caso tenga alguna duda entre en contacto con el formulario abajo.<p>
                </x-form_contacto >
            </div>
        </div>
    </div>
@endsection
