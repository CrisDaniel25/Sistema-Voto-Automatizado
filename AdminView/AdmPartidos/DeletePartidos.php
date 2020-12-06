<?php
require_once '../../Data/DataBase.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);

    if ($isContainid) { $partidoid = $_GET['id']; }
    $query = "DELETE FROM partidos WHERE partidoid={$partidoid}";
    $db->connect()->query($query);
    header("location: HomePartidos.php");
?>