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
@extends('layouts.lateral')

@section('content')
<body class="bg-gray-900 text-white">
    <div class="flex">
        </div>
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
@endsection
</html>
