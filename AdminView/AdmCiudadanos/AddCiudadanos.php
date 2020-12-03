<?php
require_once '../../Model/Ciudadano/ciudadano.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM ciudadanos";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['ciudadanoid']; } }
    else {
        $lastid = 0;        
    }

        echo "<p>".$lastid."</p>";
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['estado'])) {
        $ciudadanos =  new Ciudadano($lastid,$_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $ciudadanos->estado = $a;
        echo "<p>".$ciudadanos->estado."</p>";
        $query = "INSERT INTO ciudadanos(ciudadanoid,cedula,nombre,apellido,email,estado)VALUES('$ciudadanos->ciudadanoid','$ciudadanos->cedula','$ciudadanos->nombre','$ciudadanos->apellido','$ciudadanos->email',$ciudadanos->estado)";
        $db->connect()->query($query);
    }
    header("location: Homeciudadanos.php");
?>
