<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel primi passi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1 class="d-flex justify-content-center text-danger">Benvenuto in Laravel</h1>
    <div class="container">
        <h2 class="text-center">Questa è la formazione del Fantcalcaio di {{ $nome }} {{ $cognome }}</h2>
        <ul class="list-group text-center fw-bold">
            @foreach ($calciatori as $el)
            <li class="list-group-item">{{ $el }}</li>
            @endforeach
        </ul>
    </div>

    <script src="./script.js"></script>
</body>