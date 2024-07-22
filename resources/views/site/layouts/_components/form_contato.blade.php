<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected': ''}}> {{$motivo_contato->motivo_contato}}</option>
        @endforeach

    </select>
    <br>
    <textarea class="{{ $classe }}" name="mensagem">
        @if (old('mensagem') != '')
{{ old('mensagem') }}
@else
Preencha aqui a sua mensagem
@endif
    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
<div style="position: absolute; top: 0px; left:0px; width: 100%; background:violet">
    <pre>
        {{ $errors }}
    </pre>
</div>
