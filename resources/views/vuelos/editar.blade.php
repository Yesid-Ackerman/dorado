<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Editar Vuelo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white p-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-center tracking-widest">Editar Vuelo</h1>
        <form action="{{ route('fly.update', ['codefly' => $fly->codefly]) }}" method="POST" class="bg-gray-800 shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="destino" class="block text-gray-400 font-bold mb-2">Destino</label>
                    @foreach($destinations as $destination)
                        @if($fly->destination_id == $destination->id)
                            <p class="text-gray-200">{{ $destination->desc }}</p>
                        @endif
                    @endforeach
                </div>

                <div>
                    <label for="aerolinea" class="block text-gray-400 font-bold mb-2">Aerolínea</label>
                    @foreach($airlines as $airline)
                        @if($fly->airline_id == $airline->id)
                            <p class="text-gray-200">{{ $airline->desc }}</p>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="salaabordaje" class="block text-gray-400 font-bold mb-2">Sala de Abordaje</label>
                    <p class="text-gray-200">{{ $fly->salaabordaje }}</p>
                </div>

                <div>
                    <label for="horasalida" class="block text-gray-400 font-bold mb-2">Hora de salida</label>
                    <input type="time" step="2" id="horasalida" name="horasalida" value="{{ $fly->horasalida }}" class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label for="horallegada" class="block text-gray-400 font-bold mb-2">Hora de Llegada</label>
                    <input type="time" step="2" id="horallegada" name="horallegada" value="{{ $fly->horallegada }}" class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-200 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar Vuelo</button>
            </div>
        </form>
    </div>
</body>
</html>
