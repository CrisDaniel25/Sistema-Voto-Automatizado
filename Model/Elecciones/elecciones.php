<?php

    class Elecciones{
        public $eleccionesid;
        public $nombre;
        public $fecha;
        public $estado;

        function __construct($eleccionesid,$nombre,$fecha,$estado){
            $this->eleccionesid = $eleccionesid;
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->estado = $estado;
        }
    }

?>