<?php

    class Productos{
        public $nombresProducto;
        public $marcaProducto;
        public $precioProducto;
        public $fotoProducto;
        public $descripcionProducto;

        public function __construct($nombresRegistro,$marcaRegistro,$precioRegistro,$fotoRegistro,$descripcionRegistro){

            $this->nombresProducto=$nombresRegistro;
            $this->marcaProducto=$marcaRegistro;
            $this->precioProducto=$precioRegistro;
            $this->fotoProducto=$fotoRegistro;
            $this->descripcionProducto=$descripcionRegistro;
        }

        public function registroProducto(){
            $consultaProductoSQL="INSERT INTO producto( nombresProducto, marcaProducto, precioProducto, fotoProducto, descripcionProducto) VALUES ('$this->nombresProducto','$this->marcaProducto','$this->precioProducto','$this->fotoProducto',' $this->descripcionProducto')";

            return $consultaProductoSQL;
        }

        public function buscarProducto(){
        $consultaProductoSQL=" SELECT * FROM producto";

        return $consultaProductoSQL;
        }

        public function eliminarProducto($idProducto){
            $consultaProductoSQL="DELETE FROM producto WHERE idProducto='$idProducto'";

            return $consultaProductoSQL;
        }

        public function editarProducto($idProducto){
            $consultaProductoSQL="UPDATE producto SET nombresProducto='$this->nombreProducto',precioProducto='$this->precioProducto',fotoProducto='$this->fotoProducto',descripcionProducto=' $this->descripcionProducto' WHERE idProducto='$idProducto'";
        }
    }


?>