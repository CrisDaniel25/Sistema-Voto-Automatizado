<?php
require_once '../../Data/DataBase.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);

    if ($isContainid) { $ciudadanoid = $_GET['id']; }
    echo "<p>".$ciudadanoid."</p>";
    $query = "DELETE FROM ciudadanos WHERE ciudadanoid={$ciudadanoid}";
    $db->connect()->query($query);
    header("location: Homeciudadanos.php");
?>