@extends('layouts.app')
@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-4xl font-semibold text-teal-600 mb-8 text-center">Resultado da Comparação de Planos</h1>
    <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($planosSelecionados as $plano)
            <div
                class="bg-gradient-to-br from-yellow-100 to-teal-50 shadow-lg rounded-lg p-6 border border-teal-200 transform transition duration-300 hover:scale-105">
                <h2 class="text-3xl font-bold text-teal-700 mb-4">{{ $plano->nome }}</h2>
                <p class="text-lg"><strong class="text-teal-800">Tipo:</strong> <span
                        class="text-gray-800">{{ $plano->tipo }}</span></p>
                <p class="text-lg"><strong class="text-teal-800">Benefícios:</strong> <span
                        class="text-gray-800">{{ $plano->beneficios }}</span></p>
                <p class="text-lg"><strong class="text-teal-800">Faixa Etária:</strong> <span
                        class="text-gray-800">{{ $plano->faixaetaria }}</span></p>
                <p class="text-lg"><strong class="text-teal-800">Preço:</strong> <span class="text-red-600 font-semibold">R$
                        {{ $plano->preco }}</span></p>
            </div>
        @endforeach
    </div>
</div>
@endsection