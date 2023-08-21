<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    provedores
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">idProvedor</th>
      <th scope="col">nombre</th>
      <th scope="col">fechaRegistro</th>
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
    </tr>
  </thead>
  <tbody>
  @foreach($proveedor as $datop)
    <tr>
      <th scope="row">{{ $datop['idproveedor'] }}</th>
      <td>{{ $datop['nombre'] }}</td>
      <td>{{ $datop['fechaRegistro'] }}</td>
      <td>{{ $datop['telefono'] }}</td>
      <td>{{ $datop['correo'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>