<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include("../models/BaseDatos.php");
    include("../models/Productos.php");

    if(isset($_POST["botonProducto"])){   

        $precioProducto=$_POST["precioProducto"];

        $idProducto=$_GET["idProducto"];
        echo($precioProducto);


        
        $producto=new Productos( null,null,$precioProducto, null,null);

    
        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($producto->editarProducto($precioProducto));

        if($resultado){
            
            $_SESSION['mensaje']="exito editanto registro";
            header("Location:../views/registroProductos.php");
            

        }else{
            echo("Error editando el registro");
        }



    }else{
        echo("No deberias estar aca");
    }
?>