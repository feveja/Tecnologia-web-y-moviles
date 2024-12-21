<?php
// Datos para la conexion

// Conectarse a Postgres
$link = pg_connect("host=localhost port=5432 password=icinf user=icinf dbname=Farmacia");

// if (!$link) {
// 	die('Error al conectarse a PostgreSQL: ' . pg_ErrorMessage($link));
// }
// else
// 	echo "Exito!";
?>
