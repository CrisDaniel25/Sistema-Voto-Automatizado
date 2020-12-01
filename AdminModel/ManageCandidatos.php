<?php
    require_once '../Data/DataBase.php';

    class ManageCandidatos extends DB{
        function agregar($entity){
            $query = "INSERT INTO candidatos(nombre, apellido,partido,puesto,foto,estado)";
        }
    }

?>