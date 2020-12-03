<?php
require_once '../../Data/DataBase.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);

    if ($isContainid) { $eleccionesid = $_GET['id']; }
    echo "<p>".$eleccionesid."</p>";
    $query = "DELETE FROM elecciones WHERE eleccionesid={$eleccionesid}";
    $db->connect()->query($query);
    header("location: HomeElecciones.php");
?>