<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6">
            <div class="flex justify-center">
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">Bienvenido a Nuestra Tienda</h1>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <!-- Sección de Productos -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Productos</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Explora nuestra amplia gama de productos.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('productos.index') }}" class="text-red-500 hover:text-red-700 dark:hover:text-red-300">Ver Productos</a>
                    </div>
                </div>

                <!-- Sección de Clientes -->
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Clientes</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Accede a tu perfil y descubre beneficios exclusivos.
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('clientes.index') }}" class="text-red-500 hover:text-red-700 dark:hover:text-red-300">Área de Clientes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
