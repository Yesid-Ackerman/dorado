<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="robots" content="noindex, nofollow">
    <title>Gestion de Roles</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
@extends('layouts.lateral')

@section('content')
    <body class="bg-gray-900 text-white p-6 flex flex-grow">
        <div class="container mx-auto w-5/6 flex flex-col h-full">
            <div class="mb-6 text-center">
                <h1 class="text-4xl font-bold tracking-widest">Panel de Administración</h1>
            </div>
            <div class="bg-gray-800 shadow-lg rounded-lg p-6 mb-8 flex flex-col flex-grow">
                <h1 class="text-3xl font-bold mb-4">Gestión de Roles</h1>
                <form method="GET" action="{{ route('admin.users') }}" class="mb-4">
                    <div class="relative h-12 w-2/6 bg-white rounded-xl">
                        <input name="search" value="{{ request('search') }}" class="h-full w-full pl-10 py-3 pr-3 rounded-xl text-black" type="search" placeholder="BUSCAR">
                        <button type="submit" class="absolute left-3 top-1/2 transform -translate-y-1/2">
                            <i class="fas fa-search text-gray-500"></i>
                        </button>
                    </div>
                </form>
                <div class="flex-grow overflow-y-auto">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr class="bg-gray-700 text-gray-400">
                                <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">N°</th>
                                <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">USUARIO</th>
                                <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">EMAIL</th>
                                <th class="px-5 py-3 border-b-2 border-gray-600 text-left text-xs font-semibold uppercase tracking-wider">ACCION</th>
                            </tr>
                        </thead>
                        @if ($users->count())
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="bg-gray-800 text-gray-200">
                                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $user->id }}</td>
                                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $user->name }}</td>
                                        <td class="px-5 py-5 border-b border-gray-600 text-sm">{{ $user->email }}</td> 
                                        <td class="px-5 py-5 border-b border-gray-600 text-sm">
                                            <a href="{{ route('user.edit', $user) }}">
                                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                                            </a>
                                        </td>                       
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tbody>
                                <tr class="bg-gray-800 text-gray-200">
                                    <td colspan="4" class="px-5 py-5 border-b border-gray-600 text-center text-sm">
                                        No hay usuarios registrados
                                    </td>   
                                </tr>
                            </tbody>
                        @endif
                    </table>
                </div>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </body>
@endsection
</html>
