<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro usuário</title>
</head>
<body>
    <h1>Cadastrar Novo Usário</h1>
    <form action="{{ route('users.save') }}" method="post">
        @csrf
        <label for="">Nome Usuário</label>
        <input type="text" name="nome" id="">

        <label for="">Email Usuário</label>
        <input type="email" name="email" id="">

        <label for="">Senha Usuário</label>
        <input type="password" name="senha" id="">

        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>