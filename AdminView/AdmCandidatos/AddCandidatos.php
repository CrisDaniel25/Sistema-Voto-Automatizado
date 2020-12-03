<?php
require_once '../../Model/Candidatos/candidados.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM candidatos";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['candidatoid']; } }
    else { $lastid = 0; }

        echo "<p>".$lastid."</p>";
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['partido']) && isset($_POST['puesto']) && isset($_POST['estado'])) {
        $cadidato =  new Candidado($lastid,$_POST['nombre'],$_POST['apellido'],$_POST['partido'],$_POST['puesto'],$_POST['foto'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $candidato->estado = $a;
        echo "<p>".$candidato->estado."</p>";
        $query = "INSERT INTO candidatos(candidatoid,nombre,apellido,partido,puesto,foto,estado)VALUES('$candidato->candidatoid','$candidato->nombre','$candidato->apellido','$candidato->partido','$candidato->puesto','$candidato->foto',$candidato->estado)";
        $db->connect()->query($query);
        header("location: HomeCandidatos.php");
    }
?>
