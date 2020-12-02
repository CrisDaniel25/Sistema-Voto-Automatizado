<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/Ciudadano/ciudadano.php';
    $db = new DB();
    $isContainid = isset($_GET['id']);

    if (empty($_POST)) {    
        if ($isContainid) { $ciudadanoid = $_GET['id']; }
        $query = "SELECT * FROM ciudadanos WHERE ciudadanoid={$ciudadanoid}";
        $result = $db->connect()->query($query);
        $data = $result->fetch();
        $ciudadanos =  new Ciudadano($data['ciudadanoid'],$data['cedula'],$data['nombre'],$data['apellido'],$data['email'],$data['estado']);
    }

    if ($_POST && isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['estado'])) {
        $ciudadanos =  new Ciudadano($ciudadanoid,$_POST['cedula'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['estado']);
        $query = "UPDATE ciudadanos SET cedula='$ciudadanos->cedula',nombre='$ciudadanos->nombre',apellido='$ciudadanos->apellido',email='$ciudadanos->email',estado='$ciudadanos->estado' WHERE ciudadanoid={$ciudadanoid}";
        $db->connect()->query($query);
        header("location: Homeciudadanos.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Voto Automatizado</title>
    <link rel="stylesheet" href="../../css/bootstrap.css"/>
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css"/> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="../../Design/design.css"/>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto" style="list-style-type: none">
         <li class="nav-item active">
          <a href="HomeCiudadanos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  
  <div class="container">
    <div class="row">
        <form action="UpdateCiudadanos.php" method="post" class="form-inline">
            <div class="form-group row">
                <input class="form-control" type="number" placeholder="Cedula" name="cedula" value="<?php echo $ciudadanos->cedula?>" />                            
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $ciudadanos->nombre?>" />
                <input class="form-control" type="text" placeholder="Apellido" name="apellido" value="<?php echo $ciudadanos->apellido?>" />             
                <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $ciudadanos->email?>" />  
                <select class="form-control" name="estado">                    
                    <?php if ($data['estado'] == 1) { ?> 
                            <option select value=true>Activo</option>
                    <?php }else { ?>
                            <option value=true>Activo</option>
                        
                    <?php } ?>

                    <?php if ($data['estado'] == 0) { ?> 
                            <option select value=false>Inactivo</option>
                    <?php }else { ?>
                            <option value=false>Inactivo</option>
                        
                    <?php } ?>
                </select>           

                <button class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>