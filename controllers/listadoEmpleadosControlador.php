<?php


include("../models/BaseDatos.php");
include("../models/Empleado.php");


     $empleado=new Empleado(null,null,null,null,null,null);



     $baseDatos=new BaseDatos();
     $empleados=$baseDatos->buscarRegistros($empleado->buscar());




?>