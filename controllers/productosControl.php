<?php

    if(!isset($_SESSION)){
        session_start();
    }

include("../models/BaseDatos.php");
include("../models/Productos.php");

if(isset($_POST["recoleccionProducto"])){
    $nombresProducto=$_POST["nombresProducto"];
    $marcaProducto=$_POST["marcaProducto"];
    $precioProducto=$_POST["precioProducto"];
    $fotoProducto=$_POST["fotoProducto"];
    $descripcionProducto=$_POST["descripcionProducto"];

    $producto = new Productos( $nombresProducto,$marcaProducto,$precioProducto,$fotoProducto,$descripcionProducto);
    
    $baseDatos= new BaseDatos();
    $resultado=$baseDatos->insertarRegistro($producto->registroProducto());

    if($resultado){
            $_SESSION['mensaje']="exito en el registro";
            header("Location:../views/registroProductos.php");
    }else{
        echo("Error al registro");
    }


}else{
    echo("Pagina incorrecta");
}



?>