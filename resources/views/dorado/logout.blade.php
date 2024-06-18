<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Pasajero - Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    
    <form action="{{ route('log.Store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" id="id_email">
            <label for="id_email">Email</label>
            @error('email')
                <div class="alert alert-danger" role="alert">
                </div>
            @enderror
        </div>
                <div>
            <input type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" id="id_name">
            <label for="id_name">Username</label>
            @error('name')
                <div class="alert alert-danger" role="alert">
                </div>
            @enderror
        </div>
                <div>
            <input type="password" class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}" id="id_password">
            <label for="id_password">Email</label>
            @error('password')
                <div class="alert alert-danger" role="alert">
                </div>
            @enderror
        </div>
        <br><br>
        <button type="submit">Registrar</button>

    </form>

</body>
</html>
