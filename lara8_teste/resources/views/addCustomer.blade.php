<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Cliente</title>
</head>
<body>

<h1>Adicionar Cliente</h1>

<form action="{{ route('customer.store')}}" method="post">
  @csrf
  <div>
  <label for="name">Nome:</label>
  <input type="text" name="name" id="name">
  </div>
  <div>
  <label for="email">E-mail:</label>
  <input type="text" name="email" id="email">
  </div>
  <div>
  <label for="city">cidade:</label>
  <input type="text" name="city" id="city">
  </div>
  <div>
  <label for="state">uf:</label>
  <input type="text" name="state" id="state">
  </div>
  <div>
  <label for="number">numero:</label>
  <input type="text" name="number" id="number">
  </div>
  <div>
  <label for="complement">Complemento:</label>
  <input type="text" name="complement" id="complement">
  </div>
  <input type="submit" value="Enviar">
</form>
</body>
</html>