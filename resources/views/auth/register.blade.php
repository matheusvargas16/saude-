<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Registro</title>
</head>

<body class="bg-gray-100">

    <!-- Container do formulário -->
    <div class="flex justify-center items-center min-h-screen flex-col" style="background-color: rgb(204 251 241);">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            <a href="{{ route('welcome') }}">
                <i class="fa-solid fa-hand-holding-medical text-6xl text-blue-500" 
                style="font-size: 50px; color: rgb(220 38 38);"></i>
            </a>
        </div>
        <br><br>
        
        <!-- Título "Faça seu Registro" centralizado -->
        <h1 class="text-center text-3xl font-semibold mb-6">Faça seu Registro</h1>
        <form method="POST" action="{{ route('register') }}" 
        class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6" style="background-color: rgb(255 247 237);">
            @csrf

            <div class="mb-4">
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                <input type="text" id="nome" name="nome"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Seu nome" required />
            </div>

            <div class="mb-4">
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">CPF</label>
                <input type="text" id="cpf" name="cpf"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="000.000.000-00" required />
            </div>

            <div class="mb-4">
                <label for="datanascimento" class="block mb-2 text-sm font-medium text-gray-900">Data de
                    Nascimento</label>
                <input type="date" id="datanascimento" name="datanascimento"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required />
            </div>

            <div class="mb-4">
                <label for="endereco" class="block mb-2 text-sm font-medium text-gray-900">Endereço</label>
                <input type="text" id="endereco" name="endereco"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Seu endereço" required />
            </div>

            <div class="mb-4">
                <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900">Telefone</label>
                <input type="text" id="telefone" name="telefone"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="(00) 00000-0000" required />
            </div>

            <div class="mb-4">
                <label for="historicomedico" class="block mb-2 text-sm font-medium text-gray-900">Histórico
                    Médico (Opcional)</label>
                <textarea id="historicomedico" name="historicomedico"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>

            <div class="mb-4">
                <label for="senha" class="block mb-2 text-sm font-medium text-gray-900">Senha</label>
                <input type="password" id="senha" name="senha"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
            </div>

            <div class="mb-4">
                <label for="senha_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Confirme
                    sua senha</label>
                <input type="password" id="senha_confirmation" name="senha_confirmation"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 
                    focus:outline-none focus:ring-red-300 
                    font-medium rounded-lg text-sm w-auto px-3 py-1.5 text-center"
                    style="background-color:rgb(34 197 94); width: 130px; height: 40px;">
                    Registrar
                </button>
            </div>

        </form>

    </div>
</body>

</html>
