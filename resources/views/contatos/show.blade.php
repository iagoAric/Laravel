@extends('layouts.app')

@section('title', 'Numero do Ramal')
@section('content')
<h1>Ramal {{$contato->name}}</h1>


<ul>
    <li>{{ $contato->name}}</li>
    <li>{{ $contato->ramal}}</li>
    <li>{{ $contato->coordenacao}}</li>
    <li>{{$contato->instituto}}</li>
</ul>

<form action="{{ route('contatos.destroy', $contato->id)}}"method="POST">
    @method('DELETE')
    @csrf
    <button type="submite">Deletar</button>
</form>
@endsection