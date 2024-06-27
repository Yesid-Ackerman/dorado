<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 h-screen shadow-lg">
            <div class="p-6 text-center">
                <h1 class="text-2xl font-bold tracking-widest">Admin Panel</h1>
            </div>
            <nav class="mt-10">
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.38 0 2.75.47 3.9 1.32A6.98 6.98 0 0118 15a6.98 6.98 0 01-2.1 5.68A6.98 6.98 0 0112 22a6.98 6.98 0 01-3.9-1.32A6.98 6.98 0 016 15a6.98 6.98 0 012.1-5.68A6.98 6.98 0 0112 8z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v6m0 0H6.5m5.5 0h5.5M15 2.5l3 3m-3-3l3 3M9 2.5L6 5.5m0 0L9 2.5m0 0H9M9 2.5h.01M12 8c1.38 0 2.75.47 3.9 1.32A6.98 6.98 0 0118 15a6.98 6.98 0 01-2.1 5.68A6.98 6.98 0 0112 22a6.98 6.98 0 01-3.9-1.32A6.98 6.98 0 016 15a6.98 6.98 0 012.1-5.68A6.98 6.98 0 0112 8z" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('fly.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17a4 4 0 01.2-2H5a2 2 0 00-2 2v4h8a4 4 0 010-4zm0 0a4 4 0 010-4M7 7h8M5 9h14M7 5h14m-4 4v12m0 0H9m2 2v-4" />
                    </svg>
                    Vuelos
                </a>
                <a href="{{ route('pass.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.38 0 2.75.47 3.9 1.32A6.98 6.98 0 0118 18a6.98 6.98 0 01-2.1 5.68A6.98 6.98 0 0112 25a6.98 6.98 0 01-3.9-1.32A6.98 6.98 0 016 18a6.98 6.98 0 012.1-5.68A6.98 6.98 0 0112 11z" />
                    </svg>
                    Pasajeros
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4H6a2 2 0 00-2 2v2h6V4zm8 0h-4v4h6V6a2 2 0 00-2-2zm2 8h-6v6h4a2 2 0 002-2v-4zM4 12v4a2 2 0 002 2h4v-6H4z" />
                    </svg>
                    Configuración
                </a>
            </nav>
        </div>

        <div class="flex-1 p-6">
            <div class="container mx-auto">
                <div class="mb-6 text-center">
                    <h1 class="text-4xl font-bold tracking-widest">Dashboard</h1>
                </div>
                <div class="bg-gray-800 shadow-lg rounded-lg p-6 mb-8">
                    <h2 class="text-2xl font-semibold mb-4">Bienvenido al Panel de Administración</h2>
                    <p class="text-gray-200">Aquí puedes gestionar vuelos, pasajeros y más.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="{{ route('fly.Create') }}" class="block bg-gray-800 shadow-lg rounded-lg p-6 text-center text-white transition duration-300 hover:bg-gray-700">
                        <h3 class="text-xl font-semibold mb-2">Vuelos</h3>
                        <p class="text-gray-200">Crea un Vuelo</p>
                    </a>
                    <a href="{{ route('pass.Create') }}" class="block bg-gray-800 shadow-lg rounded-lg p-6 text-center text-white transition duration-300 hover:bg-gray-700">
                        <h3 class="text-xl font-semibold mb-2">Pasajeros</h3>
                        <p class="text-gray-200">Crea un Pasajero</p>
                    </a>
                    <div class="bg-gray-800 shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Configuración</h3>
                        <p class="text-gray-200">Proximamente...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
