<?php
    class BaseDatos{
        //Atributos = variables = datos
        public $usuario="root";
        public $password="";
        public $servidor="mysql:host=localhost;";
        public $nombreBD="dbname=tienda"; //Siempre actualizar el nombre 

        //metodos especiiales = constructor 
        public function __contruct(){}  //para crear contructores usar la palabra __contruct 

        //metodos = acciones o funciones

        public function conectarConBD(){

            //manejo de errores. Funcion propia que tiene manejo de errores, siempre usarlo para identificar errores
            try{
                
                $datosGeneralesBD=$this->servidor.$this->nombreBD;

                $conexion= new PDO($datosGeneralesBD, $this->usuario, $this-> password); //permite que pueda trabajar con distintios gestores de bases de datos 
                echo ("Exito conexion a la base de datos");
                return $conexion;

            }catch(PDOException $error){ // PDO Clase propia de php que permite generar la conexion con la base de datos
                //die reemplaza y cancela el programa, por seguridad cancelar todo
                //PDOException permite capturar el error 
                die("Tenemos un problema".$error->getMessage());
            }
        }

        public function insertarRegistro($consultaSQL){ //Argumento de la funcion
            try{
                //1. Construir un puente con la bd
                $conexion=$this->conectarConBD();

                //2. Preparar la bd para que reciba consulta
                $operacion=$conexion->prepare($consultaSQL);
                
                //3.Ejecutar la operacion
                $resultado=$operacion->execute();

                return $resultado;
        
            }catch(PDOException $error){
                die("Tenemos un problema".$error->getMessage());
            }
        }
        
    }



?>