
<?php

$correo = $_POST['correo'];
$clave = $_POST['clave'];


    if(empty($correo) || empty($clave)){
         header('Location: ../AdminView/Login.php');
   }
  


?>