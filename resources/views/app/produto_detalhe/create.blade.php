@extends('app.layouts.basico')

@section('title', 'Produto - Adicionar')

@section('content')


<div class="conteudo_pagina">

    <div class="titulo-pagina-2">
        <p>Adicionar Detalhes do Produto</p>
    </div>
    <div class="menu">
<ul>
    <li><a href="#">Novo</a></li>
</ul>
    </div>
    <div class="informacao-pagina">
        <div style="width:30%; margin-left:auto; margin-right: auto;">
            @component('app.produto_detalhe._components.form_create_edit', ['unidades' => $unidades])
            @endcomponent

        </div>
    </div>
</div>
@endsection
