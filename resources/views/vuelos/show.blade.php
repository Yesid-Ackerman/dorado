<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-laptop-code"></i> Detalles del Vuelo</h1>
        <div class="course-info animate__animated animate__fadeInUp">
            <p><strong>Codigo de Vuelo:</strong> {{$flie->codefly}}</p>
            <p><strong>Destino de Vuelo</strong> {{$flie->destination->desc}}</p>
            <p><strong>Aerolinea de Vuelo</strong> {{$flie->airline->desc}}</p>
            <p><strong>Sala de Abordaje</strong> {{$flie->salaabordaje}}</p>
            <p><strong>Hora e Partida</strong> {{$flie->horasalida}}</p>
            <p><strong>Hora de Aterrizaje</strong> {{$flie->horallegada}}</p>
        </div>
    </div>
</body>
</html>