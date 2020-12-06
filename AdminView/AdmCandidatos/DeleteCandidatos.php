<?php
require_once '../../Data/DataBase.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);

    if ($isContainid) { $candidatoid = $_GET['id']; }
    echo "<p>".$candidatoid."</p>";
    $query = "DELETE FROM candidatos WHERE candidatoid={$candidatoid}";
    $db->connect()->query($query);
    header("location: HomeCandidatos.php");
?>