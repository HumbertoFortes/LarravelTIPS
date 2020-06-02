<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes Usuário</title>
</head>
<body>
    
    <h1>Nome Usuário: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Data de Criação: {{date('d/m/Y H:i' , strtotime($user->creted_at))}}</p>
    <br>

    <a href="{{ route('user.index') }}">Listar todos usuários</a>
</body>
</html>