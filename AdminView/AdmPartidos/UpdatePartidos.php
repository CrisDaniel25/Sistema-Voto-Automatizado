
<?php

require_once '../../Data/DataBase.php';
require_once '../../Model/PuestoElectoral/puesto.php';

    $db = new DB(); 
    $id = $_GET['id'];
    if(isset($_GET['id'])){
       
    $query = "SELECT * FROM partidos WHERE partidoid=$id";
    $result = $db->connect()->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    }

    if(isset($_POST['actualiza'])){
        //Call method update here
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $logo =  addslashes(file_get_contents($_FILES['logo']['tmp_name']));
        $estado = $_POST['estado'];
        $query2 = "UPDATE partidos SET nombrepa='$nombre', descripcion='$descripcion',estado='$estado', logo='$logo' WHERE partidoid=1";
       $db->connect()->query($query2);
        header('Location: HomePartidos.php');
        }
   

?>

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
                    <form method="POST" action="UpdatePartidos.php" enctype="multipart/form-data">
                     
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $row['nombrepa']?>" />
                        <div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion"  value="<?php echo $row['descripcion']?>" />
                        <div>
                                          
                        <div class="form-group">
                            <input type="file" name="logo" class="form-control"/>
                        <div>
                        <div class="form-group">
                            <select class="form-control" name="estado" id="exampleFormControlSelect1">
                           
                            <option>Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-dark" name="actualiza" value="Actualizar"/>
                        <div>
                   
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>