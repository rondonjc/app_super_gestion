@if (isset($cliente->id))
    <form method="POST" action="{{route('cliente.update',['cliente'=>$cliente->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="POST" action="{{route('cliente.store')}}">
        @csrf
@endif
    <input type="text" name="nombre" value="{{$cliente->nombre??old('nombre')}}" placeholder="Nombre del Cliente" class="borda-preta" >
    {{$errors->has('nombre')?$errors->first('nombre'):""}}
    <button type="submit" >Enviar</button>
</form>
