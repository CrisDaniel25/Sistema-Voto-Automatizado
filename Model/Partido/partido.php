<?php

    class Partido{
        public $partidoid;
        public $nombre;
        public $descripcion;
        public $logo;
        public $estado;

        function __construct($partidoid,$nombre,$descripcion,$logo,$estado){
            
            $this->partidoid = $partidoid;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->logo = $logo;
            $this->estado = $estado;
        }
    }

?>