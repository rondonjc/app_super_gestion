@if (isset($pedido->id))
    <form method="POST" action="{{route('pedido.update',['pedido'=>$pedido->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="POST" action="{{route('pedido.store')}}">
        @csrf
@endif
    <select name="cliente_id" class="borda-preta">
        <option value="">-- Seleccione el cliente --</option>
        @foreach ($clientes as $cliente)
            <option {{($pedido->cliente_id??old('cliente_id')==$cliente->id)?'selected':''}} value="{{$cliente->id}}">{{$cliente->nombre}}</option>
        @endforeach
    </select>
    <button type="submit" >Enviar</button>
</form>
