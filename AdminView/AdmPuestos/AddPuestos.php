<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/Ciudadano/ciudadano.php';

    $db = new DB();
    
    $query = "SELECT * FROM ciudadanos";
    $result = $db->connect()->query($query);
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
          <a href="HomePuestos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  
  <div class="container">
    <div class="row">
        <form action="../../AdminController/AdmPuestos.php" method="post" class="form-inline">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" />  
                <select class="form-control" name="estado">   
                    <option value="" style="display: none;">Estado</option>        
                    <option value=1>Activo</option>        
                    <option value=0>Inactivo</option>        
                </select>           

                <button type="submit" name="envio" class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
            </div>
        </form>
    </div>
  </div>
</body>
</html>