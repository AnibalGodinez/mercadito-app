<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadito App</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

    <!-- Contenido principal -->
    <main class="flex-grow">
        <div class="container mx-auto py-10 text-center">
            <h1 class="text-4xl font-bold text-green-600"> Bienvenido a Mercadito App</h1>

            <p class="mt-4 text-lg">
                @auth
                    Hola, {{ auth()->user()->name }}. Gestiona tus ventas, inventario y reportes.
                @else
                    Tu sistema de gestión para inventario, ventas y más
                @endauth
            </p>

            @guest
            <div class="mt-6 space-x-4">
                <a href="{{ route('login') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a>
                <a href="{{ route('register') }}" class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Register</a>
            </div>
            @endguest
        </div>

        <div class="grid md:grid-cols-3 gap-6 mt-10">

            <!-- Card Inventario -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <h2 class="text-2xl font-semibold text-green-600">Inventario 📦</h2>
                <p class="mt-2">Controla tus productos, stock y precios fácilmente.</p>
                <a href="#" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Entrar</a>
            </div>

            <!-- Card Ventas -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <h2 class="text-2xl font-semibold text-blue-600">Ventas 💵</h2>
                <p class="mt-2">Registra ventas rápidas y genera tickets digitales.</p>
                <a href="{{ route('ventas.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Entrar</a>
            </div>

            <!-- Card Reportes -->
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                <h2 class="text-2xl font-semibold text-purple-600">Reportes 📊</h2>
                <p class="mt-2">Analiza tus ventas y productos más vendidos.</p>
                <a href="#" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Entrar</a>
            </div>

        </div>
    </main>

    <!-- Footer fijo -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Desarrollado por el Ingeniero Anibal Godinez</p>
        </div>
    </footer>

</body>
</html>
