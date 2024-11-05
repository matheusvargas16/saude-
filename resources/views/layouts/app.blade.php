<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguradora de Saúde</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Header -->
        <header class="bg-teal-600 ">
            <div class="container mx-auto">
                <a href="{{ route('welcome') }}">
                    <i class="fa-solid fa-hand-holding-medical text-6xl text-blue-500"
                        style="font-size: 50px; color: rgb(220 38 38);"></i>
                </a>
            </div>
        </header>

        <!-- Main content -->
        <main class="flex-grow container mx-auto py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-teal-600 ">
            <p>&copy; 2024 Saúde+. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>