<?php
	$id = $_REQUEST['id'];

	$producto = $_POST['producto'];
	$descripcion = $_POST['descripcion'];
	$existencias = $_POST['existencias'];
	$precio_compra = $POST['precio_compra'];
	$precio_venta = $POST['precio_venta'];

    $puerto = "localhost";
    $usuario = "root";
    $contrasena = "";

    mysql_connect($puerto,$usuario,$contrasena);
   	mysql_select_db("evaluacionii");

    mysql_query("UPDATE productos SET producto='$producto' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET descripcion='$descripcion' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET existencias='$existencias' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET precio_compra='$precio_compra' WHERE id_producto='$id'");
    mysql_query("UPDATE productos SET precio_venta='$precio_venta' WHERE id_producto='$id'");

    echo '<a href="/evaluacionii/index.php">volver</a>'
?>