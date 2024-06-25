<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Registro de Vuelo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white p-6">
    <div class="container mx-auto">
        <form action="{{ route('fly.Store') }}" method="POST" class="bg-gray-800 shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <h1 class="text-4xl font-bold mb-6 text-center tracking-widest">Formulario de Vuelo</h1>

            <div class="mb-4">
                <label for="destination_id" class="block text-gray-400 font-bold mb-2">Destino:</label>
                <select name="destination_id" id="destination_id" class="form-select shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
                    <option selected>Selecciona un destino</option>
                    @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->desc }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="airline_id" class="block text-gray-400 font-bold mb-2">Aerolínea:</label>
                <select name="airline_id" id="airline_id" class="form-select shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
                    <option selected>Selecciona una aerolínea</option>
                    @foreach($airlines as $airline)
                        <option value="{{ $airline->id }}">{{ $airline->desc }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="salaabordaje" class="block text-gray-400 font-bold mb-2">Sala de Abordaje:</label>
                <input type="text" name="salaabordaje" id="salaabordaje" class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="horasalida" class="block text-gray-400 font-bold mb-2">Hora de Partida:</label>
                <input type="time" step="1" name="horasalida" id="horasalida" class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label for="horallegada" class="block text-gray-400 font-bold mb-2">Hora de Llegada:</label>
                <input type="time" step="1" name="horallegada" id="horallegada" class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
