@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h2 class="text-3xl font-bold text-teal-700 mb-6">Minha Conta</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Minhas Apólices</h3>

            @foreach ($user->apolices as $apolice)
                <div class="border-b border-gray-200 py-4">
                    <p><strong>Plano:</strong> {{ $apolice->plano->nome }}</p>
                    <p><strong>Data de Início:</strong> {{ $apolice->data_inicio->format('d/m/Y') }}</p>
                    <p><strong>Data de Término:</strong> {{ $apolice->data_fim->format('d/m/Y') }}</p>
                    <p><strong>Valor:</strong> R$ {{ number_format($apolice->valor, 2, ',', '.') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
