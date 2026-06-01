<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body>

    <header class="bg-gray-900 text-white p-5">
        <h1 class="text-3xl font-bold">Zapateria</h1>
    </header>

    <nav class="bg-gray-800 text-white p-4">
        <ul class="flex gap-4 flex-wrap">

            <li><a href="/Inicio_de_sesion" class="hover:text-yellow-400">Inicio de sesión</a></li>

        </ul>
    </nav>

    <main class="min-h-screen bg-gray-100">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white text-center p-4">
        <h3>Pie de página</h3>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>
</html>