<?php
	$id = $_REQUEST['id'];

    $puerto = "localhost";
    $usuario = "root";
    $contrasena = "";

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("evaluacionii");

    mysql_query("DELETE FROM productos WHERE id_producto='$id'");

    echo '<a href="/evaluacionii/index.php">volver</a>'
?>