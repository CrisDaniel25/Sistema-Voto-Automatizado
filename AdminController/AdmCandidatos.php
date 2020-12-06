<?php

    require_once '../Model/Candidatos/candidatos.php';
   // require_once '../AdminModel/ManageCandidatos.php';
    require_once '../Data/DataBase.php';


    $db = new DB();

    if(isset($_POST['nombre']) && isset($_POST['apellido'])){

     //   $managecandidato = new ManageCandidatos();
        $candidato = new Candidatos();
        $candidato->nombre = $_POST['nombre'];
        $candidato->apellido = $_POST['apellido'];
        $candidato->partido = $_POST['partido'];
        $candidato->puesto = $_POST['puesto'];
        $candidato->foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $candidato->estado = $_POST['estado'];
        //$managecandidato->agregar($candidato->nombre,$candidato->apellido,$candidato->partido,$candidato->puesto,
       // $candidato->foto,$candidato->estado
        //);
        $query = "INSERT INTO candidatos(nombre, apellido,partidoid,puestoid,foto,estado)
        VALUES ('$candidato->nombre','$candidato->apellido','$candidato->partido','$candidato->puesto','$candidato->foto','$candidato->estado')";
        $stat = $db->connect()->query($query);
        header('Location: ../AdminView/AdmCandidatos/HomeCandidatos.php');

       
    }


?>