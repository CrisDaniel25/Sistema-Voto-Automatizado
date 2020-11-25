<?php 

    class Administrador{
        public $correo;
        public $clave;

        function __construct($correo,$clave){
            $this->correo = $correo;
            $this->clave = $clave;
        }
    }

?>