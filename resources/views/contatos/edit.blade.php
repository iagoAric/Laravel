@extends('layouts.app')

@section('title', "Editar o Ramal {$contato->name}" )

@section('content')
<h1 class="text-2xl text-white bg-gray-500 font-semibold py-2"> Editar o Ramal de {{ $contato->name }}</h1>


@include('includes.validations-form')

<form action="{{ Route('contatos.update', $contato->id)}}" method="post">
    @method('PUT')
    @include('contatos._partials.form')
</form>

@endsection
