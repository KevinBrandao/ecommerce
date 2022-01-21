<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <style>
            a {
                color: royalblue;
            
            }

    </style>

</head>
<body>
        <center>
        <h1>Todos os Produtos</h1>
        <a href="/products/create">Criar</a>
        </center>
        

        @foreach ($products as $prod)
            <h2> {{$prod->name}} </h2>
            <h4><p> {{ $prod->description }} </p></h4>
            <p> R$ {{ $prod->price }} ,00</p>
            <a href="/products/show/{{ $prod->id }}">Datalhes</a>
            
            <hr>
        @endforeach

</body>
</html>