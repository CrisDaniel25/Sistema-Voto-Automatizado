<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/PuestoElectoral/puesto.php';

    $db = new DB();
    
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre']; $puesto->descripcion = $_POST['descripcion']; $puesto->estado = $_POST['estado'];
        $query = "INSERT INTO puesto_electivo(nombre,descripcion,estado) VALUES('$puesto->nombre','$puesto->descripcion','$puesto->estado')";   
        $db->connect()->query($query);
        header('location: HomePuestos.php');
    }
?>