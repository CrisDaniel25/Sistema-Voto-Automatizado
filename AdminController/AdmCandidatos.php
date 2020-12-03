<?php

    require_once '../Model/Candidatos/candidatos.php';
    require_once '../AdminModel/ManageCandidatos.php';


    if(isset($_POST['nombre']) && isset($_POST['apellido'])){
        $managecandidato = new ManageCandidatos();
        $candidato = new Candidatos();
        $candidato->nombre = $_POST['nombre'];
        $candidato->apellido = $_POST['apellido'];
        $candidato->partido = $_POST['partido'];
        $candidato->puesto = $_POST['puesto'];
        $candidato->foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $candidato->estado = $_POST['estado'];
        $managecandidato->agregar($candidato->nombre,$candidato->apellido,$candidato->partido,$candidato->puesto,
        $candidato->foto,$candidato->estado
        );
       
    }


?>