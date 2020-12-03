<?php
require_once '../../Model/Partido/partido.php';
require_once '../../Data/DataBase.php';

    $db = new DB();
    $query = "SELECT * FROM partidos";
    $result = $db->connect()->query($query);     
    if( $result->rowCount() > 0) { while($row = $result->fetch()) { $lastid = $row['partidoid']; } }
    else {
        $lastid = 0;        
    }
        $lastid = $lastid + 1;
        echo "<p>".$lastid."</p>";

    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $partido =  new Partido($lastid,$_POST['nombre'],$_POST['descripcion'],$_POST['logo'],$_POST['estado']);
        $a = $_POST['estado'];
        echo "<p>".$a."</p>";
        $partido->estado = $a;
        echo "<p>".$partido->estado."</p>";
        $query = "INSERT INTO partidos(partidoid,nombre,descripcion,logo,estado)VALUES('$partido->partidoid','$partido->nombre','$partido->descripcion','$partido->logo',$partido->estado)";
        $db->connect()->query($query);
        header("location: HomePartidos.php");
    }
?>
<<<<<<< HEAD

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Voto Automatizado</title>
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../Design/design.css"/>
        <link rel="stylesheet" href="../../css/Style.css"/>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
          <a href="../AdminHome.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  <div class="main">
            <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-12">
                    <form method="POST" action="../../AdminController/AdmPartidos.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required/>
                        <div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required/>
                        <div>
                                          
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control"/>
                        <div>
                        <div class="form-group">
                            <select class="form-control" name="estado" id="exampleFormControlSelect1">
                           
                            <option>Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-dark" value="Agregar"/>
                        <div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
=======
>>>>>>> 841f2b6921785bef502944fb296c9f6dd51b8fde
