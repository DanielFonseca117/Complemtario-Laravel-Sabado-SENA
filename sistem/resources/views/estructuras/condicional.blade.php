<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de Control</title>
</head>
<body>
    <h1>Su nota es: {{$nota}}</h1>
    <p>
        Situacion
        @if($nota >= 8)
            Aprobado

        @else
            Reprobado

        @endif

    </p>
</body>
</html>