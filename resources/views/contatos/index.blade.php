@extends('layouts.app')

@section('title', 'Lista de Contato')

@section('content')
<div class="container py-4">
    <div class="container mx-auto px-4 py-8">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="shadow bg-gray-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Logout</button>
        </form>
        @yield('content')
    </div>

    <h1 class=" text-2xl font-semibold leading-tigh py-2">
        Lista de Contatos
        <a href="{{ route('contatos.create') }}" class="bg-red-900 rounded-full text-white px-4 text-sm">+</a>
    </h1>

    <form action="{{ route('contatos.index') }}" method="get" class="py-2">
        <div class="input-group">
            <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white border-black">
            <button class="shadow bg-gray-800  focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
        </div>
    </form>


    <table class="table table-striped table-bordered table-condensed table-hover">

        <thead>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text- text-xs font-semibold text-gray-700  uppercase tracking-wider">
                Nome
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Ramal
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Instituto
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider ">
                Ações
            </th>
        </thead>
        <tbody>
            @foreach($contatos as $contato)
            <tr>
                <td>
                    {{$contato->name}}
                </td>
                <td>
                    {{$contato->ramal}}
                </td>
                <td>
                    {{$contato->instituto}}

                </td>
                <td>
                    <a href="{{ route('contatos.edit', $contato->id) }}" class="bg-red-300  rounded-full py-2 px-6">Editar</a>

                    <a href="{{ route('contatos.show', $contato->id) }}" class="bg-gray-300 rounded-full py-2 px-6">Detalhes</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <div class="py-4 text-left text-xs font-semibold text-red-700 uppercase tracking-wider">
        {{ $contatos->appends([
            'search' => request()->get('search', '')

        ])->links() }}
    </div>
</div>
@endsection
