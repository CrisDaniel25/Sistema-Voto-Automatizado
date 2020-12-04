<?php

    require_once '../Data/DataBase.php';

    class ManagePartido extends DB{
        function FilterNombrePartido(){
            $query = "SELECT partidoid, nombre FROM partidos";
            $stat = $this->connect()->prepare($query);
            $stat->execute();
            $result = $stat;
                return $result;
            
        }

        function agregar($nombre,$descripcion,$logo,$estado){
            
            $query = "INSERT INTO partidos (nombre, descripcion,logo,estado)
             VALUES (:nombre, :descripcion, :logo, :estado)";
             $stat = $this->connect()->prepare($query);
             $stat->bindParam(':nombre',$nombre);
             $stat->bindParam(':descripcion',$descripcion);
             $stat->bindParam(':logo',$logo);
             $stat->bindParam(':estado',$estado);
             if($stat->execute()){
                  header('Location: ../AdminView/AdmPartidos/AddPartidos.php');

             }
            
        } 
    }

?>