<?php

    require_once '../Data/DataBase.php';

    class Votos extends DB{
        function SumarVotos($id){
            $query = "SELECT votos FROM candidatos WHERE candidatoid=$id";
            $stat = $this->connect()->prepare($query);
            if($stat->execute()){
                    
                $result = $stat->fetch(PDO::FETCH_ASSOC);
                $voto = $result['votos'] + 1;

                $query_votos = "UPDATE candidatos SET votos=$voto WHERE candidatoid=$id";
                $stt =  $this->connect()->query($query_votos);
                header('Location: ../View/SeleccionPuesto.php');

            
            }
            
        }
    }


?>