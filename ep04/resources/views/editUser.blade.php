<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuário</title>
</head>
<body>
    <h1>Editar dados de </h1>
    <form action="{{ route('user.update, ['user' => $user->id]') }}" method="post">
        @csrf
        <label for="">Nome Usuário</label>
        <input type="text" name="nome" value="{{ $user->name }}">

        <label for="">Email Usuário</label>
        <input type="email" name="email" value="{{ $user->email }}">

        <label for="">Senha Usuário</label>
        <input type="password" name="senha" id="">

        <input type="submit" value="Salvar Edição">
    </form>
    
</body>
</html>