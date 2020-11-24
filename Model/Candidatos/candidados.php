
<?php


class Candidatos{

    public $candidatoid;
    public $nombre;
    public $apellido;
    public $partido;
    public $puesto;
    public $foto;
    public $estado;

    function __construct($candidatoid,$nombre,$apellido,$partido,$puesto,$foto,$estado){
        $this->candidatoid = $candidatoid;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->partido = $partido;
        $this->puesto = $puesto;
        $this->foto = $foto;
        $this->estado = $estado;
    }

}

?>














