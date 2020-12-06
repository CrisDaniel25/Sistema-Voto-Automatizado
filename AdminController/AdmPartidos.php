<?php
   // require_once '../AdminModel/ManagePartido.php';
    require_once '../Model/Partido/partido.php';
    require_once '../Data/DataBase.php';

    $db = new DB();

    if(isset($_POST['nombre']) && isset($_POST['descripcion'])){
        $partido = new Partido();
      //  $manage = new ManagePartido();
        $partido->nombre = $_POST['nombre'];
        $partido->descripcion = $_POST['descripcion'];
        $partido->logo = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $partido->estado = $_POST['estado'];



     //   $manage->agregar($partido->nombre,$partido->descripcion,$partido->logo,$partido->estado);
        $query = "INSERT INTO partidos (nombrepa, descripcion,logo,estado)
        VALUES ('$partido->nombre', '$partido->descripcion', '$partido->logo','$partido->estado')";
        $stat = $db->connect()->query($query);
        //$stat->bindParam(':nombre',$nombre);
        //$stat->bindParam(':descripcion',$descripcion);
       // $stat->bindParam(':logo',$logo);
        //$stat->bindParam(':estado',$estado);
        //if($stat->execute()){
             header('Location: ../AdminView/AdmPartidos/AddPartidos.php');

        //}
        
    }

?>