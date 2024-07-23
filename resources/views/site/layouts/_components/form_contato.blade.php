<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{ $classe }}">
    @if ($errors->has('telefone'))
        {{$errors->first('telefone')}}
    @endif
    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{ $classe }}">
    @if ($errors->has('email'))
        {{$errors->first('email')}}
    @endif
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}"
                {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}</option>
        @endforeach

    </select>
    @if ($errors->has('motivo_contatos_id'))
        {{$errors->first('motivo_contatos_id')}}
    @endif
    <textarea class="{{ $classe }}" name="mensagem">
        @if (old('mensagem') != '')
{{ old('mensagem') }}
@else
Preencha aqui a sua mensagem
@endif
    </textarea>
    @if ($errors->has('mensagem'))
        {{$errors->first('mensagem')}}
    @endif
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
{{-- @if ($errors->any())
    <div style="position: absolute; top: 0px; left:0px; width: 100%; background:violet">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
        @endforeach
    </div>
@endif --}}
