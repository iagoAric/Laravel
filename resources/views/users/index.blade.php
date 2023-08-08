@extends('layouts.app')

@section('title', 'listagem dos usuarios ')

@section('content')
<h1> Listagem de Usuarios
        <a href="{{ route('users.create')}}">+</a>
</h1>
<form action="{{ route('users.index')}}" method="get">
    <input type="text" name="search" placeholder="pesquisar">
    <button>Pesquisar</button>
</form>


<ul>
    @foreach ($users as $users)
    <li>
        {{$users->name}} -
        {{$users->email}}
         | <a href="{{ Route('users.edit', $users->id)}}">Editar</a>
         | <a href="{{ Route('users.show', $users->id)}}">Detalhes</a>

    </li>


    @endforeach
</ul>
@endsection
    
