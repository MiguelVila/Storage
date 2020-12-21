<?php
define('_HOST_NAME','localhost');
define('_DATABASE_NAME','reservas');
define('_DATABASE_USER_NAME','root');
define('_DATABASE_PASSWORD','');
$MySQLIConn=new MySQLI(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
if ($MySQLIConn->connect_errno) {
	die("Error:->".$MySQLIConn->connect_errno);
}

?>