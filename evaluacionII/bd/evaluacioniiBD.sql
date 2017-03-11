create database evaluacionii;
	use evaluacionionii;

	create table productos(
		id_producto int(4) not null auto_increment primary key,
		producto varchar(15),
		descripcion varchar(35),
		existencias int(3),
		precio_compra int(100),
		precio_venta int(100)
		);

	insert into productos(producto,descripcion,existencias,precio_compra,precio_venta) values("oro","metal",2,25,58);