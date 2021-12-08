<?php

include("../models/BaseDatos.php");
include("../models/Productos.php");

$producto = new Productos(null,null,null.null,null,null); 
$baseDatos = new BaseDatos();
$productos=$baseDatos->buscarRegistros($producto->buscarProducto());


?>