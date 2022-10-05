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
    <tr>
      <td>#ID</td>
      <td>Nome</td>
      <td>E-mail</td>
      <td>Ações</td>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td>{{$customer->id}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>
      <a href="{{ route('customer.edit', ['customer' => $customer->id])}}">Ver Cliente</a>
      <form action="{{ route('customer.destroy', ['customer' => $customer->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Remover">
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  
</body>
</html>