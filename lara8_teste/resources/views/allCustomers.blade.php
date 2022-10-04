<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Todos os Clientes</title>
</head>
<body>

<h1>Clientes</h1>

<table>
  <thead>
    <th>
      <td>#ID</td>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Ações</td>
    </th>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td>{{$customer->id}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>
      <a href="{{ route('customer.show', ['customer' => $customer->id])}}">Ver Cliente</a>
      <form action="" method="post">
        <input type="hidden" name="customer" value="">
        <input type="submit" value="Remover">
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  
</body>
</html>