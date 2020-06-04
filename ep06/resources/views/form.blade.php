<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('debug') }}" method="post">
        @csrf
        <label for="">Título</label>
        <input type="text" name="title" id="">
      
        <label for="">Sub-Título</label>
        <input type="text" name="subtitle" id="">
        
        <br>
        <br>
        <label for="">Conteúdo</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Cadastrar Artigo">
    </form>
</body>
</html>