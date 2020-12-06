<?php
require_once '../../Data/DataBase.php';

    class Information extends DB 
    {
        public function GetPuesto($id)
        {
            $query = "SELECT * FROM puesto_electivo WHERE puestoid=$id";
            $resultpuesto = $this->connect()->query($query);
            $data = $resultpuesto->fetch();
            $nombre = $data['nombrepu'];
            return $nombre;
        }

        public function GetPartido($id)
        {
            $query = "SELECT * FROM partidos WHERE partidoid=$id";
            $resultpartido = $this->connect()->query($query);
            $data = $resultpartido->fetch();
            $nombre = $data['nombrepa'];
            return $nombre;
        }
    }
?>