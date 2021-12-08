<?php

if(!isset($_SESSION)){
    session_start();
}

include("../models/BaseDatos.php");
include("../models/Productos.php");

$idProducto=$_GET["idProducto"];

$producto = new Productos(null, null, null, null, null);

$baseDatos= new BaseDatos();
$resultadoProducto = $baseDatos->insertarRegistro($producto->eliminarProducto("$idProducto"));

if($resultadoProducto){
    $_SESSION['mensaje']="Eliminacion exitosa";
    header("Location: ../views/registroProductos.php");
}else{
    echo("Error al eliminar");
}

?>