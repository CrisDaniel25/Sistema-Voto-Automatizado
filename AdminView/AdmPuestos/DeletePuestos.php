<?php
require_once '../../Data/DataBase.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);

    if ($isContainid) { $puestoid = $_GET['id']; }
    echo "<p>".$puestoid."</p>";
    $query = "DELETE FROM puesto_electivo WHERE puestoid={$puestoid}";
    $db->connect()->query($query);
    header("location: HomePuestos.php");
?>