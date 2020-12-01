<?php
require_once '../../Model/Elecciones/elecciones.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT COUNT(eleccionesid) FROM elecciones";
    $result = $db->connect()->query($query);     
    $lastid = $result->fetch();

    echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['fecha']) && isset($_POST['estado'])) {

        $elecciones =  new Elecciones($lastid,$_POST['nombre'],$_POST['fecha'],$_POST['estado']);

        //     $sql = "INSERT INTO elecciones(eleccionesid,nombre,fecha,estado)VALUES('$elecciones->eleccionesid','$elecciones->nombre','$elecciones->fecha','$elecciones->estado')";

        // $a = $_POST['nombre'];
        // $b = $_POST['fecha'];
        // $c = $_POST['estado'];
        // echo "<p>".$a."</p>";
        // echo "<p>".$b."</p>";
        // echo "<p>".$c."</p>";
    }
// header("location: HomeElecciones.php");
?>
