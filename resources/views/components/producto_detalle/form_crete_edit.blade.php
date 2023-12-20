@if (isset($productoDetalle->id))
    <form method="POST" action="{{route('producto-detalle.update',['producto_detalle'=>$productoDetalle->id])}}">
        @csrf
        @method('PUT')
@else
    <form method="POST" action="{{route('producto-detalle.store')}}">
        @csrf
@endif
    <input type="text" name="producto_id" value="{{$productoDetalle->producto_id??old('producto_id')}}" placeholder="ID del Producto" class="borda-preta" >
    {{$errors->has('anchura')?$errors->first('anchura'):""}}
    <input type="text" name="anchura" value="{{$productoDetalle->anchura??old('anchura')}}" placeholder="Anchura" class="borda-preta" >
    {{$errors->has('anchura')?$errors->first('anchura'):""}}
    <input type="text" name="largura" value="{{$productoDetalle->largura??old('largura')}}" placeholder="Largura" class="borda-preta" >
    {{$errors->has('largura')?$errors->first('largura'):""}}
    <input type="text" name="altura" value="{{$productoDetalle->altura??old('altura')}}" placeholder="Altura" class="borda-preta" >
    {{$errors->has('altura')?$errors->first('altura'):""}}
    <select name="unidad_id" class="borda-preta">
        <option value="">-- Seleccione la unidad de medida --</option>
        @foreach ($unidades as $unidad)
            <option {{($productoDetalle->unidad_id??old('unidad_id')==$unidad->id)?'selected':''}} value="{{$unidad->id}}">{{$unidad->descripcion}}</option>
        @endforeach
    </select>
    {{$errors->has('unidad_id')?$errors->first('unidad_id'):""}}
    <button type="submit" >Enviar</button>
</form>
