<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
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

        <h1 class="text-center text-3xl font-semibold mb-6">Faça seu Login</h1>
        <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6" style="background-color: rgb(255 247 237);">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email:</label>
                <input type="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required placeholder="Seu email" />
            </div>

            <div class="mb-4">
                <label for="senha" class="block mb-2 text-sm font-medium text-gray-900">Senha:</label>
                <input type="password" name="senha"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required placeholder="Sua senha" />
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                    focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm w-auto px-4 py-2 text-center"
                    style="background-color:rgb(59 130 246); width: 130px; height: 40px;">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
