<?php
$db_host = "localhost";
$db_name = "evaluacionii";
$db_user = "root";
$db_password = "";
$connection = mysql_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysql_error());
mysql_select_db($db_name) or die("Error al seleccionar la base de datos:".mysql_error());
@mysql_query("SET NAMES 'utf8'");
        
if(isset($_POST["id_productos"])){

$id_productos = $_POST["id_productos"];
$sql_query = "SELECT * FROM productos WHERE id_producto=$id_producto;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el producto";
mysql_close($connection);
?>
SELECT * FROM `productos` WHERE 1 
INSERT INTO productos(producto,descripcion,existencia,precio_compra,precio_vente) VALUES ("oro","metal","13","25","54")











