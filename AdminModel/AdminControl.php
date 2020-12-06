<?php

require_once '../Data/DataBase.php';
require_once 'admin.php';

session_start();
class AdminControl extends DB{

    function Login($correo,$clave){
        $admin = new Administrador();
        $query = "SELECT * FROM administrador WHERE correo=:correo";
        $stat = $this->connect()->prepare($query);
        $admin->correo = $correo;
        $admin->clave = $clave;
        $stat->bindParam(':correo',$admin->correo);
        $stat->execute();
        $result = $stat->fetch(PDO::FETCH_ASSOC);
        if(count($result) > 0  && $admin->clave == $result['clave']){
            $_SESSION['adminid'] = $result['id'];
            header('Location: ../AdminView/AdminHome.php');
            
        }
        else{
            header('Location: ../AdminView/Login.php');
        }

    }
}

?>