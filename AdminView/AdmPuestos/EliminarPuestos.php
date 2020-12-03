<?php

    require_once '../../AdminModel/ManagePuesto.php';

    if(isset($_GET['id'])){
        $managepuesto = new ManagePuesto();
        $id = $_GET['id'];
        $managepuesto->EliminarPuestos($id);
      

    }

?>