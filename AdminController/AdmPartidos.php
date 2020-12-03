<?php
    require_once '../AdminModel/ManagePartido.php';
    require_once '../Model/Partido/partido.php';

    if(isset($_POST['nombre']) && isset($_POST['descripcion'])){
        $partido = new Partido();
        $manage = new ManagePartido();
        $partido->nombre = $_POST['nombre'];
        $partido->descripcion = $_POST['descripcion'];
        $partido->logo = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $partido->estado = $_POST['estado'];
        $manage->agregar($partido->nombre,$partido->descripcion,$partido->logo,$partido->estado);
        
    }

?>