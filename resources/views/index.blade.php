<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Mi primer sitio</h1>
    <p>
    <h2>Nombre:  {{$nombre}}</h2>
    <h2>Apellido: {{$apellido}}</h2>
    <p>

   

    @foreach ($hobbies as $hobby)
        <ul>
            <li>{{$hobby}}</li>
        </ul>
    @endforeach

    @for ($i =0; $i <13; $i++)

        <ul>
            <li>{{$i}}</li>
        </ul>
    @endfor

    @for ($i =0; $i <13; $i++)

        <ul>
            <li>{{$numero . "X" . $i ."=" . $numero * $i}}</li>
        </ul>
@endfor
    
</body>
</html>