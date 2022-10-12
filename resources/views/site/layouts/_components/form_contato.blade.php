{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome" class="{{$classe}}">
    <br>
    <input type="text" name="telefone" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input type="text" name="email" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select class="{{$classe}}" name="motivo_contato">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
    </select>
    <br>
    <textarea class="{{$classe}}" name="mensagem">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>