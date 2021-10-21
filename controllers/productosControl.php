<?php

include("../models/BaseDatos.php");
include("../models/Productos.php");

if(isset($_POST["recoleccionProducto"])){
    $nombresProducto=$_POST["nombresProducto"];
    $marcaProducto=$_POST["marcaProducto"];
    $precioProducto=$_POST["precioProducto"];
    $fotoProducto=$_POST["fotoProducto"];
    $descripcionProducto=$_POST["descripcionProducto"];

    $producto = new Productos( $nombresProducto,$marcaProducto,$precioProducto,$fotoProducto,$descripcionProducto);
    
    echo($producto->registroProducto());
}else{
    echo("Pagina incorrecta");
}



?>