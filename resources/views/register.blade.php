<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            font-family: 'Orbitron', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

    <main class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center mb-6">Registro</h1>
        <form action="{{ route('validar-registro') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="userInput" class="block text-sm font-medium mb-2">Nombres</label>
                <input type="text" id="userInput" name="name" value="{{ old('name') }}" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="emailInput" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="emailInput" name="email" value="{{ old('email') }}" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required autocomplete="off">
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="passwordInput" class="block text-sm font-medium mb-2">Password</label>
                <input type="password" id="passwordInput" name="password" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="passwordConfirmInput" class="block text-sm font-medium mb-2">Confirmar Password</label>
                <input type="password" id="passwordConfirmInput" name="password_confirmation" class="w-full p-3 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 rounded text-white font-bold">Registrarse</button>
        </form>
    </main>

</body>
</html>
