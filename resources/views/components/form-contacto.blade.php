{{$slot}}
<form method='POST' action={{route('site.contacto')}} >
    @csrf
    <input name='nombre' type="text" placeholder="Nombre" value="{{old('nombre')}}" class="{{$clase}}">
        {{$errors->has('nombre')?$errors->first('nombre'):""}}
    <br>
    <input name='telefono' type="text" placeholder="Telefono" value="{{old('telefono')}}"  class="{{$clase}}">
        {{$errors->has('telefono')?$errors->first('telefono'):""}}
    <br>
    <input name='email' type="text" placeholder="E-mail" value="{{old('email')}}"  class="{{$clase}}">
        {{$errors->has('email')?$errors->first('email'):""}}
    <br>
    <select name='motivo_contacto_id' class="{{$clase}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contactos as $motivo_contacto )
            <option {{old('motivo_contacto_id')==$motivo_contacto->id? 'selected':''}} value="{{$motivo_contacto->id}}">{{$motivo_contacto->motivo_contacto}}</option>
        @endforeach
    </select>
        {{$errors->has('motivo_contacto_id')?$errors->first('motivo_contacto_id'):""}}
    <br>
    <textarea name='mensaje' class="{{$clase}}">@if (old('mensaje')) {{old('mensaje')}} @else Preencha aqui a sua mensagem @endif </textarea>
        {{$errors->has('mensaje')?$errors->first('mensaje'):""}}
    <br>
    <button type="submit" class="{{$clase}}">ENVIAR</button>
</form>



