<?php
    require_once '../Model/Partido/partido.php';
    require_once '../Data/DataBase.php';

    $db = new DB();
      $partido = new Partido();
      $partido->nombre = $_POST['nombre'];
      $partido->descripcion = $_POST['descripcion'];
      $partido->logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
      $partido->estado = $_POST['estado'];
      $query = "INSERT INTO partidos(nombre, descripcion,logo,estado)
      VALUES ('$partido->nombre','$partido->descripcion','$partido->logo','$partido->estado')";
      $stat = $db->connect()->query($query);
      header('Location: ../AdminView/AdmPartidos/HomePartidos.php');
?>