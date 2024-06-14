<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-laptop-code"></i> Detalles del Curso</h1>
        <div class="course-info animate__animated animate__fadeInUp">
            <p><strong>Codigo de Vuelo:</strong> {{$flie->codefly}}</p>
            <p><strong>Destino de Vuelo</strong> {{$flie->desc}}</p>
        </div>
    </div>
</body>
</html>