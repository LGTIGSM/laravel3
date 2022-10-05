<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Cliente</title>
</head>
<body>

<h1>Editar Cliente</h1>

<form action="{{ route('customer.update', ['customer' => $customer->id])}}" method="post">
  @csrf
  @method('put')
  <label for="name">Nome:</label>
  <input type="text" name="name" id="name" value="{{$customer->name}}">
  
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email" value="{{$customer->email}}">

  <label for="city">cidade:</label>
  <input type="text" name="city" id="city" value="{{$address->city}}">
  
  <label for="state">uf:</label>
  <input type="text" name="state" id="state" value="{{$address->state}}">

  <label for="number">numero:</label>
  <input type="text" name="number" id="number" value="{{$address->number}}">

  <label for="complement">Complemento:</label>
  <input type="text" name="complement" id="complement" value="{{$address->complement}}">

  <input type="submit" value="Enviar">
</form>
</body>
</html>