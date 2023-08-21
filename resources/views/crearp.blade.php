<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    crear Provedor
<form method="POST", action="{{ route('proveedor.guardar') }}"  class="form">
                    @csrf
                    <div class="mb-3">
                        <label>nombre</label>
                        <input type="text" id="nombre" name="nombre"/>
            
                    </div>
                    
            
                    <div class="mb-3">
                        <label>telefono</label>
                        <input type="text" id="telefono" name="telefono" />
                    </div>
            
                    <div class="mb-3">
                        <label>correo</label>
                        <input type="text" id="correo" name="correo"/>
                    </div>
                    <div class="mb-3">
                        <label>fecha de Registro</label>
                        <input type="date" id="fecha" name="fecha"/>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>


</body>
</html>