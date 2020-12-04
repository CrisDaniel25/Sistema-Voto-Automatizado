<?php

    require_once '../Model/PuestoElectoral/puesto.php';
    require_once '../AdminModel/ManagePuesto.php';

  
    $managepuesto = new ManagePuesto();

    if(isset($_POST['envio'])){
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre'];
        $puesto->descripcion = $_POST['descripcion'];
        $puesto->estado = $_POST['estado'];
        $managepuesto->AgregarPuesto($puesto);

    }
    if(isset($_POST['actualizo'])){
        
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre'];
        $puesto->descripcion = $_POST['descripcion'];
        $puesto->estado = $_POST['estado'];
        $managepuesto->Actualizar($_GET['id'],$puesto->nombre,$puesto->descripcion,$puesto->estado);

    }


?>