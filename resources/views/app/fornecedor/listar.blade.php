@extends('app.layouts.basico')

@section('title', 'Fornecedor - Listar')

@section('content')


<div class="conteudo_pagina">

    <div class="titulo-pagina-2">
        <p>Fornecedor</p>
    </div>
    <div class="menu">
<ul>
    <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
    <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
</ul>
    </div>
    <div class="informacao-pagina">
        <div style="width:30%; margin-left:auto; margin-right: auto;">
            ... Lista ...
        </div>
    </div>
</div>
@endsection
