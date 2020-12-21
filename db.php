<?php
error_reporting(0);
function conectarce(){
    if(!($link=mysql_connect("localhost","root")))
    {
        echo "Error en la base de datos";
        exit();
    }
    if (!mysql_select_db("reservas",$link))
    {
        echo "error selecionando la base de datos";
        exit();
    }
    return $link;
}
$con = conectarce();
?>