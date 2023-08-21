<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
crear Prodcuto
<form method="POST", action="{{ route('producto.guardar') }}"  class="form">
                    @csrf
                    <div class="mb-3">
                        <label>Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion"/>
            
                    </div>
                    
            
                    <div class="mb-3">
                        <label>Precio</label>
                        <input type="number" id="precio" name="precio" />
                    </div>
            
                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="number" id="stock" name="stock"/>
                    </div>
                    <div class="mb-3">
                        <label>Paga Inpuesto</label>
                        <input type="number" id="impuesto" name="impuesto"/>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>

</body>
</html>