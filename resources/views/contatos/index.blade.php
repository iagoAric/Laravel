@extends('layouts.app')

@section('Lista de Contato')

@section('content')

<h1>
    Lista de Contatos
    <a href="{{ route('contatos.create') }}">+</a>
</h1>
<form action="{{ route('contatos.index') }}" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>

<ul>
    
    @foreach($contatos as $contato)
    <li>
        {{$contato->name}}
        {{$contato->ramal}}
        {{$contato->cordenação}}
        {{$contato->instituto}}
        <a href="{{ route('contatos.edit', $contato->id) }}">Editar</a>
        <a href="{{ route('contatos.show', $contato->id) }}">Detalhes</a>
    </li>
@endforeach
</ul>
<div class="py-3">
    {{ $contatos->appends([
        'search' => request()->get('search', '')
    ])->links()}}
</div>
@endsection

