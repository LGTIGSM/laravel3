<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="{{ route('debug')}}" method="post">
  @csrf
  <label for="">Título</label>
  <input type="text" name="title">

  <br>

  <label for="">Sub-Título</label>
  <input type="text" name="subtitle">

  <br>

  <label for="">Conteúdo do Artigo</label>
  <textarea name="content" id="" cols="30" rows="10"></textarea>

  <br>

  <input type="submit" value="Cadastrar Artigo">
</form>
  
</body>
</html>