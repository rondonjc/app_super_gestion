{{$slot}}
<form method='POST' action={{route('site.contacto')}} >
    @csrf
    <input name='nombre' type="text" placeholder="Nombre" class="{{$class}}">
    <br>
    <input name='telefono' type="text" placeholder="Telefono" class="{{$class}}">
    <br>
    <input name='email' type="text" placeholder="E-mail" class="{{$class}}">
    <br>
    <select name='motivo_contacto' class="{{$class}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea name='mensaje' class="{{$class}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>
