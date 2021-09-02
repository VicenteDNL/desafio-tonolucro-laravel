<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body class="bg-dark">
<div class="text-center m-5">
    <h2 class="text-white">Desafio Tonolucro</h2>
    <h5 class="text-white">by: Danilo Saraiva Vicente</h5>
    <div>
        <button type="button" class="btn btn-sm btn-light">Repositório</button>
        <button type="button" class="btn btn-sm btn-light">Colections API (postman)</button>
    </div>
</div>
<div class="p-5 d-flex align-items-center " style="height: 100%;">
    <div class="card border-0 shadow-sm bg-light" style="width: 100%;">
        <div class="card-body">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>