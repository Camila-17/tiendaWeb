<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include("../models/BaseDatos.php");
    include("../models/Empleado.php");

    if(isset($_POST["botonEditar"])){   

        $email=$_POST["email"];

        
        $id=$_GET["id"];

        $empleado=new Empleado( null,null,$email, null,null, null);

        $baseDatos=new BaseDatos();
        $resultado=$baseDatos->insertarRegistro($empleado->editar($id));
        
        if($resultado){
            
            $_SESSION['mensaje']="exito editanto registro";
            header("Location:../views/registroUsuarios.php");
            

        }else{
            echo("Error editando el registro");
        }



    }else{
        echo("No deberias estar aca");
    }
?>