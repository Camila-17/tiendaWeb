<?php
    class BaseDatos{
        
        public $usuario="root";
        public $password="";
        public $servidor="mysql:host=localhost;";
        public $nombreBD="dbname=tienda"; 
    
        public function __contruct(){}  

        

        public function conectarConBD(){

            
            try{
                
                $datosGeneralesBD=$this->servidor.$this->nombreBD;

                $conexion= new PDO($datosGeneralesBD, $this->usuario, $this-> password);
                return $conexion;
                die("Tenemos un problema".$error->getMessage());
            }
        }

        public function insertarRegistro($consultaSQL){ 
            try{
                
                $conexion=$this->conectarConBD();

                
                $operacion=$conexion->prepare($consultaSQL);
                
                
                $resultado=$operacion->execute();

                return $resultado;
        
            }catch(PDOException $error){
                die("Tenemos un problema".$error->getMessage());
            }
        }

        public function buscarRegistros($consultaSQL){
            try{
                
                $conexion=$this->conectarConBD();

                
                $operacion=$conexion->prepare($consultaSQL);
                
                
                $operacion->setFetchMode(PDO::FETCH_ASSOC);

            
                $operacion->execute();

                return $operacion->fetchAll();
        
            }catch(PDOException $error){
                die("Tenemos un problema".$error->getMessage());
            }
        }



        
    }



?>