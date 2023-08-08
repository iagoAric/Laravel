@extends('layouts.app')

@section('title', 'Novo Ramal')
@section('content')
<h1>Novo Ramal</h1>

@include('includes.validations-form')

<form action="{{ route('contatos.store' )}}" method="post">
    @csrf
    @include('contatos._partials.form')
</form>

@endsection