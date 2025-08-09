<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <p> 
        {{$numero}}
    </p>
    @while($numero > 10)
        <p>Se repite: {{$numero=$numero-1}}</p>
    @endwhile
</body>
</html>