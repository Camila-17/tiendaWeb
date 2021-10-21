<?php

//Incluir el modelo de la BD
//Incluir el modelo de empleado 

include("../models/BaseDatos.php");
include("../models/Empleado.php");

//Recoger los datos
    if(isset($_POST["recoleccion"])){
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $fotografia=$_POST["foto"];


        //3.Creo un objeto del modelo EMPLEADO   //<img src="public/img/carousel.jpg" class="d-block w-100" alt="...">
        $empleado=new Empleado( $nombres,$apellidos,$email, $edad,$descripcion, $fotografia);

        //4.Ejecutar el metodo insertar registro de la bd
        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($empleado->registrar());
        
        //5.Valido el resultado
        if($resultado){
            echo("Exito registrar");
            header("Location:../views/registroUsuarios.php");
            

        }else{
            echo("Error al registro");
        }



    }else{
        echo("No deberias estar aca");
    }
?>