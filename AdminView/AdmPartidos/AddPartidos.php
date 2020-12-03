<?php
require_once '../../Model/Partido/partido.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM partidos";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['partidoid']; } }
    else {
        $lastid = 0;        
    }
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $partido =  new Partido($lastid,$_POST['nombre'],$_POST['descripcion'],$_POST['logo'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $partido->estado = $a;
        echo "<p>".$partido->estado."</p>";
        $query = "INSERT INTO partidos(partidoid,nombre,descripcion,logo,estado)VALUES('$partido->partidoid','$partido->nombre','$partido->descripcion','$partido->logo',$partido->estado)";
        $db->connect()->query($query);
        header("location: HomePartidos.php");
    }
?>
