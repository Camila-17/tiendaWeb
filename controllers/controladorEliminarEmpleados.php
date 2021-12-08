<?php

if(!isset($_SESSION)){
        session_start();
    }

    include("../models/BaseDatos.php");
    include("../models/Empleado.php");

    
    $id=$_GET["id"];
    
    
        $empleado=new Empleado( null,null,null,null,null, null);

        
        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($empleado->eliminar($id));


        if($resultado){
            
            $_SESSION['mensaje']="Eliminacion exitosa";
            header("Location:../views/registroUsuarios.php"); 
            

        }else{
            echo("Error al Eliminar");
        }


        





?>