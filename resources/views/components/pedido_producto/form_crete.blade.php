
    <form method="POST" action="{{route('pedido-producto.store',['pedido'=>$pedido->id])}}">
        @csrf
    <select name="producto_id" class="borda-preta">
        <option value="">-- Seleccione el Producto --</option>
        @foreach ($productos as $producto)
            <option {{(old('producto_id')==$producto->id)?'selected':''}} value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
    </select>
    <br>
    <input name='cantidad' type="text" placeholder="Cantidad" value="{{old('cantidad')}}" class="borda-preta">
    {{$errors->has('cantidad')?$errors->first('cantidad'):""}}
    <br>
    <button type="submit" >Enviar</button>
</form>
