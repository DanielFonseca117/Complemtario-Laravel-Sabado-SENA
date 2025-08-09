<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    @foreach($lista as $obj)
        <p>{{$obj}}</p>
    @endforeach

    @php
        function sumar($numero1,$numero2){
            return $numero1+$numero2;
        }
    @endphp

    <p>Resultado: {{sumar(17,100)}}</p>
</body>
</html>