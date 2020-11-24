<?php

    class Puesto{
        public $puestoid;
        public $nombre;
        public $descripcion;
        public $estado;

        function __construct($puestoid,$nombre,$descripcion,$estado){
            
            $this->puestoid = $puestoid;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->estado = $estado;
        }
    }

?>