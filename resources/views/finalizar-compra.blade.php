@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h2 class="text-3xl font-bold text-teal-700 mb-6">Finalizar Compra</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <!-- Detalhes do Plano -->
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $plano->nome }}</h3>
            <p class="text-gray-700 mb-4"><strong>Descrição:</strong> {{ $plano->descricao }}</p>
            <p class="text-gray-700 mb-4"><strong>Preço:</strong> R$ {{ number_format($plano->preco, 2, ',', '.') }}</p>
            <p class="text-gray-700 mb-4"><strong>Tipo de Plano:</strong> {{ $plano->tipo }}</p>
            <p class="text-gray-700 mb-4"><strong>Área de Cobertura:</strong> {{ $plano->cobertura }}</p>

            <!-- Confirmação da Compra -->
            <form action="{{ route('comprar.confirmar', ['id' => $plano->id]) }}" method="POST">
                @csrf
                
                <!-- Detalhes do comprador (exemplo) -->
                <div class="mb-4">
                    <label for="nome" class="block text-gray-700">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" class="w-full border-gray-300 rounded-lg py-2 px-4" required>
                </div>

                <div class="mb-4">
                    <label for="endereco" class="block text-gray-700">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="w-full border-gray-300 rounded-lg py-2 px-4" required>
                </div>

                <button type="submit" class="w-full mt-4 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg">
                    Confirmar Compra
                </button>
            </form>

            <!-- Botão para voltar -->
            <a href="{{ route('comprar.planos') }}" class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-lg">
                Voltar para Planos
            </a>
        </div>
    </div>
@endsection
