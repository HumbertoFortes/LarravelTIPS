<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem Usuários</title>
</head>
<body>
    
    <table  class="table table-hover" border="2">
        <tr>
            <td>#ID</td>
            <td>Nome:</td>
            <td>E-mail:</td>
            <td>Ações:</td>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    
                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                        @csrf
                        @method('delete') <!--Form Spuff, falsificar o method-->
                        <input type="hidden" name="user" value="{{$user->id}}">
                    <p><a href="{{ route('user.show', ['user' => $user->id]) }}">Ver Usuário</a> 
                        / <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar</a> 
                        / <input type="submit" value="Remover"> </p>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>