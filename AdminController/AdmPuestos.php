<?php

    require_once '../Model/PuestoElectoral/puesto.php';
    require_once '../Data/DataBase.php';

  
    //$managepuesto = new ManagePuesto();

    $db = new DB();
    if(isset($_POST['envio'])){
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre'];
        $puesto->descripcion = $_POST['descripcion'];
        $puesto->estado = $_POST['estado'];

        $query = "INSERT INTO puesto_electivo(nombrepu,descripcion,estado) VALUES('$puesto->nombre','$puesto->descripcion','$puesto->estado')";
        $stat = $db->connect()->query($query);
        header('Location: ../AdminView/AdmPuestos/AddPuestos.php');

      //  $managepuesto->AgregarPuesto($puesto);

    }
    if(isset($_POST['actualizo'])){
        
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre'];
        $puesto->descripcion = $_POST['descripcion'];
        $puesto->estado = $_POST['estado'];
        $managepuesto->Actualizar($_GET['id'],$puesto->nombre,$puesto->descripcion,$puesto->estado);

    }


?>