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
                <a href="{{ route('dasboard.home') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('fly.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M16 10h4a2 2 0 0 1 0 4h-4l-4 7h-3l2 -7h-4l-2 2h-3l2-4l-2 -4h3l2 2h4l-2 -7h3z" />
                    </svg>
                    Vuelos
                </a>
                <a href="{{ route('pass.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Pasajeros
                </a>
                <a href="#" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4H6a2 2 0 00-2 2v2h6V4zm8 0h-4v4h6V6a2 2 0 00-2-2zm2 8h-6v6h4a2 2 0 002-2v-4zM4 12v4a2 2 0 002 2h4v-6H4z" />
                    </svg>
                    Configuración
                </a> 
                <a href="{{ route('logout') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />  
                        <polyline points="16 17 21 12 16 7" />  
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>
                    cerrar sesion
                </a>             
            </nav>
        </div>
        @yield('content') @section('content')
    </div>
</body>
</html>
