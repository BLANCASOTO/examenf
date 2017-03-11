<?php
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

	mysql_query("INSERT INTO productos(producto,descripcion,existencias,precio_compra,precio_venta) VALUES('$nombre','$descripcion','$existencias','$precio_compra','$precio_venta')");

	echo '<a href="/evaluacionii/index.php">volver</a>'
?>