<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <h3>Olá mundo (view)</h3>
    <ul>
        <li><a href="{{ route('site.index') }}">Home</a></li>
        <li><a href="{{ route('site.sobrenos') }}">Sobre nós</a></li>
        <li><a href="{{ route('site.index') }}">Contato</a></li>
    </ul>
</body>
</html>