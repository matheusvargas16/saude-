@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Escolha seu Plano de Saúde</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($planos as $plano)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold">{{ $plano->nome }}</h3>
                <p class="text-gray-700 mb-4">{{ $plano->descricao }}</p>
                <a href="{{ route('comprar.plano', $plano->id) }}" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-200">
                    Comprar
                </a>
                <a href="{{ route('plano.detalhes', $plano->id) }}" class="inline-block mt-4 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg transition duration-200">
                    Exibir Detalhes
                </a>

            </div>
        @endforeach
    </div>
</div>
@endsection
