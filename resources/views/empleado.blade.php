<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    empleado
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">idPrestamo</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">Fecha de Ingreso</th>
      <th scope="col">salario</th>
    </tr>
  </thead>
  <tbody>
  @foreach($empelado as $datop)
    <tr>
      <th scope="row">{{ $datop['idprestamo'] }}</th>
      <td>{{ $datop['nombre'] }}</td>
      <td>{{ $datop['apellido'] }}</td>
      <td>{{ $datop['fechaIngreso'] }}</td>
      <td>{{ $datop['salario'] }}</td>
    </tr>
    @endforeach
  </tbody>

    

</body>
</html>