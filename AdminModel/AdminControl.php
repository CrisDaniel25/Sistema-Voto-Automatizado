<?php

require_once '../Data/DataBase.php';
require_once 'admin.php';

class AdminControl extends DB{

    function Login($correo,$clave){
        $admin = new Administrador();
        $query = "SELECT * FROM administrador WHERE correo=:correo AND clave=:clave";
        $stat = $this->connect()->prepare($query);
        $admin->correo = $correo;
        $admin->clave = $clave;
        $stat->bindParam(':correo',$admin->correo);
        $stat->bindParam(':clave',$admin->clavee);
        $stat.execute();
        $result = $stat->fetch(PDO::FETCH_ASSOC);
        if(count($result) > 0 && password_verify($admin->clave)){
            $_SESSION['adminid'] = $result['id'];
            header('Location: ');
        }

    }
}

?>