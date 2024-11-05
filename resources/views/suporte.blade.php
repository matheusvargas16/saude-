@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-semibold text-teal-600 mb-6">Suporte ao Cliente</h1>

    @if (session('status'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <!-- FAQ Section -->
    <div class="bg-yellow-50 rounded-lg p-6 mb-8 border border-yellow-200">
        <h2 class="text-2xl font-medium text-teal-700">Perguntas Frequentes (FAQ)</h2>
        <ul class="list-disc list-inside text-gray-700 mt-4 space-y-2">
            <li><strong>Como criar um ticket?</strong> - Preencha o formulário abaixo e envie sua mensagem.</li>
            <li><strong>Como visualizar meus tickets?</strong> - Entre na sua conta para ver os tickets criados.</li>
        </ul>
    </div>

    <!-- Formulário de Criação de Ticket -->
    <form method="POST" action="{{ route('suporte.ticket') }}" class="bg-blue-50 shadow-lg rounded-lg p-6 border border-blue-200">
        @csrf
        <h2 class="text-xl font-medium text-teal-700 mb-4">Criar um Ticket de Suporte</h2>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required class="w-full px-4 py-2 border rounded-lg" placeholder="Informe o título do seu problema">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" required class="w-full px-4 py-2 border rounded-lg" rows="5" placeholder="Descreva seu problema"></textarea>
        </div>

        <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600 transition duration-300">
            Enviar Ticket
        </button>
    </form>
</div>
@endsection
