@extends('site.layouts.base')
@section('titulo','Login')
@section('conteudo')
        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina" style="text-align:center;display: flex; justify-content: center">
                <div style="width: 30%; margin-left:auto; margin-right:auto;">
                    <form action="{{route('site.login')}}" method="POST">
                        @csrf
                        <input name="name" type="text" value="{{old('name')}}" placeholder="Usuario" class="borda-preta">
                        {{$errors->has('name')?$errors->first('name'):''}}
                        <input name="password" type="password"  value="{{old('password')}}" placeholder="Clave" class="borda-preta">
                        {{$errors->has('password')?$errors->first('password'):''}}
                        <button type="submit">Acessar</button>
                    </form>
                    {{(isset($erro) && $erro!="")?$erro:""}}
                </div>

            </div>
        </div>
@endsection
