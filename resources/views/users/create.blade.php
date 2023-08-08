@extends('layouts.app')

@section('title', 'Novo usuarios ')

@section('content')
<h1>Novo usuario</h1>

@include('includes.validations-form')

<form action="{{Route('users.store')}}" method='post'>
    @csrf
    <input type="text" name="name" placeholder="nome" value="{{ old('name') }}">
    <input type="email" name="email" placeholder="email"value="{{ old('email') }}">
    <input type="password" name="password" placeholder="senha">
    <button type="submit">
        Enviar
    </button>
</form>

@endsection