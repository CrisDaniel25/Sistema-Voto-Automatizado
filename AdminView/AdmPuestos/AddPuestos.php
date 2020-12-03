<?php
require_once '../../Model/PuestoElectoral/puesto.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM puesto_electivo";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['puestoid']; } }
    else {
        $lastid = 0;        
    }

        echo "<p>".$lastid."</p>";
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $puestos =  new Puesto($lastid,$_POST['nombre'],$_POST['descripcion'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $puestos->estado = $a;
        echo "<p>".$puestos->estado."</p>";
        $query = "INSERT INTO puesto_electivo(puestoid,nombre,descripcion,estado)VALUES('$puestos->puestoid','$puestos->nombre','$puestos->descripcion',$puestos->estado)";
        $db->connect()->query($query);
        header("location: HomePuestos.php");
    }
?>
