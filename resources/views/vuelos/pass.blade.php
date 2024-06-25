<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Listado de Pasajeros</title>
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
            <h1 class="text-4xl font-bold tracking-widest">Pasajeros del Vuelo {{ $flie->codefly }} {{ $flie->salaabordaje }} - {{ $flie->destination->desc }}</h1>
        </div>
        <div class="bg-gray-800 shadow-lg rounded-lg p-6 mb-8">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-700 text-gray-400">
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">N°</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Identificación</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Nombres</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Apellidos</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Email</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Teléfono</th>
                        <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">Cancelar Vuelo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flie->passengers as $passenger)
                    <tr class="bg-gray-800 text-gray-200">
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->id }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->dni }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->names }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->lnames }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->email }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $passenger->phone }}</td>
                        <td class="px-5 py-5 border-b border-gray-600 text-sm">
                            <form action="{{ route('passenger.destroy', $passenger->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="return confirm('¿Estás seguro de cancelar este vuelo para este pasajero?')">Cancelar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
