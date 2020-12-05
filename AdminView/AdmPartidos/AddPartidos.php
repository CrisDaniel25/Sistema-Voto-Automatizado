<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/Partido/partido.php';

    $db = new DB();
    
    // if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $partido = new Partido();
        $image = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
        $image_name = addslashes($_FILES['logo']['name']);
        $image_size = getimagesize($_FILES['logo']['tmp_name']);

        move_uploaded_file($_FILES["logo"]["tmp_name"], "upload/" . $_FILES["logo"]["name"]);
        $partido->logo = "upload/" . $_FILES["logo"]["name"];
        $partido->nombre = $_POST['nombre']; $partido->descripcion = $_POST['descripcion']; $partido->estado = $_POST['estado'];
        $query = "INSERT INTO partidos(nombre,descripcion,logo,estado) VALUES('$partido->nombre','$partido->descripcion','$partido->logo','$partido->estado')";   
        $db->connect()->query($query);
        header('location: HomePartidos.php');
    // }
?>
