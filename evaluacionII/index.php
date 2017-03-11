<!DOCTYPE html>
<?php
  $puerto = "localhost";
  $usuario = "root";
  $contrasena = "";

  $conexion = mysql_connect($puerto,$usuario,$contrasena);
  mysql_select_db("evaluacionii");

  $query = "SELECT * FROM productos";
  $result = mysql_query($query);
?>
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

          <h1 class="panel-title">Todos los productos</h1>
        </div>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>producto</th>
                <th>descripcion</th>
                <th>existencias</th>
                <th>precio compra</th>
                <th>precio venta</th>
                <th>editar</th>
                <th>eliminar</th>
              </tr>
              <?php
                while ( $registro = mysql_fetch_array($result)) {
              ?>
              <tr>
                <th><?php echo $registro[0]?></th>
                <th><?php echo $registro["nombre"]?></th>
                <th><?php echo $registro[2]?>></th>
                <th><?php echo $registro[3]?></th>
                <th><?php echo $registro[4]?></th>
                <th><?php echo $registro[5]?></th>
                <th>
                  <a href="editar.php?id=<?php echo $registro[0];?>">
                    <p>editar</p>
                  </a>
                </th>
                <th>
                  <a href="eliminar.php?id=<?php echo $registro[0];?>">
                    <p>eliminar</p>
                  </a>
                </th>
              </tr>
              <?php
                }
              ?>
            </thead>
          </table>
        </div>
      </div>  
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>