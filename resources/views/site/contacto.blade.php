@extends('site.layouts.base')
@section('titulo','Bienvenido')
@section('conteudo')
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
                <div class="contato-principal" style="width: 60%;">
                    @component('components.form_contacto',['class'=>'borda-preta'])
                        <p>Nuestro equipo analisará su mensaje y respondera lo mas pronto posible</p>
                        <p>Nuestro tiempo medio de respuesta es de 45 minutos</p>
                    @endcomponent
                </div>
            </div>
        </div>
@endsection
