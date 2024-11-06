@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h2 class="text-3xl font-bold text-teal-700 mb-6">{{ $plano->nome }}</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Exibindo todos os detalhes do plano -->
            <p class="text-gray-700 mb-4"><strong>Descrição:</strong> {{ $plano->beneficios }}</p>
            <p class="text-gray-700 mb-4"><strong>Preço:</strong> R$ {{ number_format($plano->preco, 2, ',', '.') }}</p>
            <p class="text-gray-700 mb-4"><strong>Tipo de Plano:</strong> {{ $plano->tipo }}</p>
            
            <!-- Botão para comprar o plano -->
            <a href="{{ route('comprar.plano', ['id' => $plano->id]) }}" class="inline-block mt-4 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg">
                Comprar Plano
            </a>

            <!-- Botão para voltar -->
            <a href="{{ route('comprar.planos') }}" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg">
                Voltar para Planos
            </a>
        </div>
    </div>
@endsection
