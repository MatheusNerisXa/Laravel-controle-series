<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Controle de Séries</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="container">
    <h1>{{$title}}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{$slot}}
</div>
</body>
</html>
