@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-semibold text-teal-600 mb-6">Comparação de Planos</h1>
    <form method="POST" action="{{ route('compararPlanos') }}" class="bg-yellow-50 shadow-lg rounded-lg p-6 border border-yellow-200">
        @csrf
        <h2 class="text-xl font-medium text-teal-700 mb-4">Selecione os planos para comparar:</h2>
        <div class="space-y-4">
            @foreach($planos as $plano)
                <div class="flex items-center">
                    <input type="checkbox" name="planos[]" value="{{ $plano->id }}" class="mr-2 h-5 w-5 text-teal-600 rounded">
                    <label class="text-gray-700">
                        {{ $plano->nome }} - <span class="text-teal-700 font-semibold">R$ {{ number_format($plano->preco, 2, ',', '.') }}</span>
                    </label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="mt-6 bg-teal-500 text-white px-4 py-2 rounded shadow hover:bg-teal-600 transition duration-300 ease-in-out">
            Comparar
        </button>
    </form>
</div>
@endsection
