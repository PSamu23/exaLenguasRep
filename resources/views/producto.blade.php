<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    productos

    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Descripcion</th>
      <th scope="col">precio</th>
      <th scope="col">stock</th>
      <th scope="col">Paga Impuesto?</th>
    </tr>
  </thead>
  <tbody>
  @foreach($producto as $datop)
    <tr>
      <th scope="row">{{ $datop['id'] }}</th>
      <td>{{ $datop['descripcion'] }}</td>
      <td>{{ $datop['precio'] }}</td>
      <td>{{ $datop['stock'] }}</td>
      <td>{{ $datop['pagaIsv'] }}</td>
    </tr>
    @endforeach
  </tbody>


</body>
</html>