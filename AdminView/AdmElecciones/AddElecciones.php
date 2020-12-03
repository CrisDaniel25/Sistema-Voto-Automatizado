<?php
require_once '../../Model/Elecciones/elecciones.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM elecciones";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['eleccionesid']; } }
    else {
        $lastid = 0;        
    }

        echo "<p>".$lastid."</p>";
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['fecha']) && isset($_POST['estado'])) {
        $elecciones =  new Elecciones($lastid,$_POST['nombre'],$_POST['fecha'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $elecciones->estado = $a;
        echo "<p>".$elecciones->estado."</p>";
        $query = "INSERT INTO elecciones(eleccionesid,nombre,fecha,estado)VALUES('$elecciones->eleccionesid','$elecciones->nombre','$elecciones->fecha',$elecciones->estado)";
        $db->connect()->query($query);
    }
    header("location: HomeElecciones.php");
?>
