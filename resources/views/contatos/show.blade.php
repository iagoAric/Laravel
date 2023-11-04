@extends('layouts.app')

@section('title', 'Numero do Ramal')
@section('content')
<h1 class=" text-2xl font-bold leading-tigh py-2">Detalhes do Ramal<{{$contato->name}}< /h1>

        <table class="table table-striped table-bordered table-condensed table-hover">
            <thead>
                <th>
                    Nome
                </th>
                <th>
                    Rama
                </th>
                <th>S
                    Cordenação
                </th>
                <th>
                    Instituto
                </th>
            </thead>
            <tr>
                <td>{{ $contato->name}}</td>
                <td>{{ $contato->ramal}}</td>
                <td>{{ $contato->coordenacao}}</td>
                <td>{{$contato->instituto}}</td>
                </td>
                <form action="{{ route('contatos.destroy', $contato->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="rounded bg-red-700 hover:bg-red-700 text-white font-bold py-2 px-2">Deletar</button>
                </form>
                <div class="py-2">
                    <form action="{{ route('contatos.index') }}" method="get">
                        @csrf
                        <button type="submit" class="shadow bg-gray-500 text-white font-bold py-2 px-4 rounded">Voltar ao Inicio</button>
                    </form>
                    @yield('content')
        </table>
        @endsection
