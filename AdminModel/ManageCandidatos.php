<?php
    require_once '../Data/DataBase.php';
    require_once '../Model/Candidatos/candidatos.php';

    class ManageCandidatos extends DB{

        
        function agregar($nombre,$apellido,$partido,$puesto,$foto,$estado){
            $query = "INSERT INTO candidatos(nombre, apellido,partidoid,puestoid,foto,estado)
             VALUES (:nombre,:apellido,:partidoid,:puestoid,:foto,:estado)";
             $stat = $this->connect()->prepare($query);
         /*    $nombre="ds";
             $apellido="f";
             $partido="ds";
             $puesto="d";
             $foto="";
             $estado=1;*/
             $stat->bindParam(':nombre',$nombre);
             $stat->bindParam(':apellido',$apellido);
             $stat->bindParam(':partidoid',$partido);
             $stat->bindParam(':puestoid',$puesto);
             $stat->bindParam(':foto',$foto);
             $stat->bindParam(':estado',$estado);

             if($stat->execute()){
                header('Location: ../AdminView/AddPartidos.php');
           }

        }
        function mostrarcandidatos(){
           
        }
    }

?>