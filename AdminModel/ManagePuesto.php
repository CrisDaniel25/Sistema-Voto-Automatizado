<?php
require_once '../../Data/DataBase.php';

    class ManagePuesto extends DB{
        function FilterNombrePuesto(){
            $query = "SELECT puestoid, nombre FROM puesto_electivo";
            $stat = $this->connect()->prepare($query);
            $stat->execute();
            $result = $stat;
                return $result;
        }
        function AgregarPuesto($puesto){
            $query = "INSERT INTO puesto_electivo(nombre,descripcion,estado) VALUES(:nombre,:descripcion,:estado)";
            $stat = $this->connect()->prepare($query);
            $stat->bindParam(':nombre',$puesto->nombre);
            $stat->bindParam(':descripcion',$puesto->descripcion);
            $stat->bindParam(':estado',$puesto->estado);
            if($stat->execute()){
                header('Location: ../AdminView/AdmPuestos/HomePuestos.php');
            }
        }
        function MostrarPuestos(){
            $query = "SELECT * FROM puesto_electivo";
            $stat = $this->connect()->prepare($query);
            $stat->execute();
            $result = $stat;
                return $result; 
        }
        function EliminarPuestos($id){
            $query = "DELETE FROM puesto_electivo WHERE puestoid:id";
            $stat = $this->connect()->prepare($query);
            $stat->bindParam(':id',$id);
            if($stat->execute()){
                header('Location: ../AdminView/HomePuestos.php');
            }

        }
    }

?>