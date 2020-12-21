<?php
include_once 'db1.php';
/*metodo para insertar el dato*/
if (isset($_POST['save'])) {
	
	$area=$MySQLIConn->real_escape_string($_POST['area']);
	$usuario=$MySQLIConn->real_escape_string($_POST['usuario']);
	$fecha=$MySQLIConn->real_escape_string($_POST['fecha']);
	$horai=$MySQLIConn->real_escape_string($_POST['horai']);
	$horaf=$MySQLIConn->real_escape_string($_POST['horaf']);
	$implemento=$MySQLIConn->real_escape_string($_POST['implemento']);
$SQL=$MySQLIConn->query("INSERT INTO reserva(codigoa,codigou,fecha,horai,horaf,implemento) VALUES ('$area','$usuario','$fecha','$horai','$horaf','$implemento')");
header("Location: resultado.php");
if (!$SQL) {
	echo $MySQLIConn->error;
}
}


if (isset($_GET['del'])) {
	$SQL=$MySQLIConn->query("DELETE FROM reserva WHERE codigor=".$_GET['del']);
	//volver a cargar la pagina
	header("Location: administrador.php");
}
?>