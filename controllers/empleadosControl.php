<?php

    if(!isset($_SESSION)){
        session_start();
    }

include("../models/BaseDatos.php");
include("../models/Empleado.php");


    if(isset($_POST["recoleccion"])){
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $email=$_POST["email"];
        $edad=$_POST["edad"];
        $descripcion=$_POST["descripcion"];
        $fotografia=$_POST["foto"];


        
        $empleado=new Empleado( $nombres,$apellidos,$email, $edad,$descripcion, $fotografia);

    
        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($empleado->registrar());
        
        if($resultado){
            
            $_SESSION['mensaje']="exito en el registro";
            header("Location:../views/registroUsuarios.php");
            

        }else{
            echo("Error al registro");
        }



    }else{
        echo("No deberias estar aca");
    }
?>