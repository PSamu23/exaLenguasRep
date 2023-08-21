<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    crear empleado
    <form method="POST", action="{{ route('empleado.guardar') }}"  class="form">
                    @csrf
                    <div class="mb-3">
                        <label>nombre</label>
                        <input type="text" id="nombre" name="nombre"/>
            
                    </div>
                    
            
                    <div class="mb-3">
                        <label>apellido</label>
                        <input type="text" id="apellido" name="tapellido" />
                    </div>
            
                    <div class="mb-3">
                        <label>salario</label>
                        <input  type="number" step="0.01" id="salario" name="salario"/>
                    </div>
                    <div class="mb-3">
                        <label>fecha de Ingreso</label>
                        <input type="date" id="fecha" name="fecha"/>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>




</body>
</html>