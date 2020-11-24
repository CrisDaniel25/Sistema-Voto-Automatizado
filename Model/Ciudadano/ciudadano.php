<?php

class Ciudadano{
    public $ciudadanoid;
    public $cedula;
    public $nombre;
    public $apellido;
    public $email;
    public $estado;
    
    function __construct($ciudadanoid,$cedula,$nombre,$apellido,$email,$estado){
        $this->ciudadanoid = $ciudadanoid;
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;$this->estado;
    }
}

?>