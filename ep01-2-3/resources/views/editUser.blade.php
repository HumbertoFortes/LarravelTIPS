<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Dados de Usário</h1>
    <form action="{{ route('users.edit' , ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT') <!--Form Spuff, falsificar o method-->

        <label for="">Nome Usuário</label>
        <input type="text" name="nome" value="{{$user->name}}">

        <label for="">Email Usuário</label>
        <input type="email" name="email" value="{{$user->email}}">

        <label for="">Senha Usuário</label>
        <input type="password" name="senha" value="">

        <input type="submit" value="Editar Usuário">
    </form>
</body>
</html>