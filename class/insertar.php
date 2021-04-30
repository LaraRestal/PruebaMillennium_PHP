<?php

require_once "../conexion/conexion.php";
require_once "metodos.php";

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];    
}


if(isset($_POST["apellidos"])){
    $apellidos = $_POST["apellidos"];   
}

$obj= new metodos();

if($obj->insertarDatos($nombre, $apellidos) == 1){
    header("location:../index.php");
} else{
    echo "fallo al agregar";
}

?>