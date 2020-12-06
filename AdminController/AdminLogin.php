
<?php

require_once '../AdminModel/AdminControl.php';
require_once '../AdminModel/admin.php';

session_start();
if(isset($_POST['correo']) && isset($_POST['clave'])){
        $Am = new AdminControl();
        $admin = new Administrador();
    

    if(empty($correo) || empty($clave)){
        $admin->correo = $_POST['correo'];
        $admin->clave = $_POST['clave'];
        $Am->Login($admin->correo,$admin->clave);  
              
   }
  
}



?>