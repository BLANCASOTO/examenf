<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="page-header">
      <a class="navbar-brand" href="index.php">Productos</a>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="agregar.php">Agregar <span class="sr-only">(current)</span></a></li>
    </div>
    </div>
    </br>
    
    <div class="container">

 
          <h1 class="panel-title">Agregar producto</h1>
        </div>

          <form role="form" name="formulario" method="POST" type="submit" action="php/recibedatos.php">
            Producto<input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre del producto" required>
            Descripcion<textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Agregue una descripcion" required></textarea>
            Existencias<input type="number" name="existencias" id="existencias" min="0" max="999" class="form-control" placeholder="existencias" required>
            Precio compra<input type="number" name="precio_compra" id="precio_compra" min="0" max="9999" step="0.01" class="form-control" placeholder="precio compra" required>
            Precio venta<input type="number" name="precio_venta" id="precio_venta" min="0" max="9999" step="0.01" class="form-control" placeholder="precio venta" required>
            <a href="index.php">
              <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </a>
          </form>
        </div>
      </div>  
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>