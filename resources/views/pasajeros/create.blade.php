<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Crear Pasajero - Formulario de Registro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white p-6">
    <div class="container mx-auto">
        <div class="mb-6 text-center">
            <h1 class="text-4xl font-bold tracking-widest">Panel de Administración</h1>
            <h2 class="text-2xl font-semibold tracking-wide mt-4">Crear Pasajero - Formulario de Registro</h2>
        </div>
        
        <form action="{{ route('pass.Store') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 shadow-lg rounded-lg p-6 mb-8">
            @csrf
            
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Identificación</h3>
                <input type="text" name="dni" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Nombres</h3>
                <input type="text" name="names" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Apellidos</h3>
                <input type="text" name="lnames" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">E-mail</h3>
                <input type="email" name="email" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Teléfono</h3>
                <input type="text" name="phone" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Código de Vuelo</h3>
                <select name="codefly" class="w-full bg-gray-700 text-gray-200 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    @foreach($flies as $fly)
                        <option value="{{ $fly->codefly }}">{{ $fly->codefly }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar Registro</button>
            </div>
        </form>
    </div>
</body>
</html>
