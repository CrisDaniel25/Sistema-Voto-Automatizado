<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/PuestoElectoral/puesto.php';

    $db = new DB(); 
    if(isset($_GET['id'])){ $id = $_GET['id']; }

    if (empty($_POST)) {
        $query = "SELECT * FROM partidos WHERE partidoid=$id";
        $result = $db->connect()->query($query);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $posted_image = 'data:image/jpeg;base64,'. base64_encode(stripslashes($row['logo']));
    }

    if($_POST && isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $logo =  addslashes(file_get_contents($_FILES['logo']['tmp_name']));
        $estado = $_POST['estado'];
        $query2 = "UPDATE partidos SET nombrepa='$nombre', descripcion='$descripcion',estado='$estado', logo='$logo' WHERE partidoid=$id";
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
        <ul class="navbar-nav mr-auto" style="list-style-type: none">
         <li class="nav-item active">
          <a href="HomePartidos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>

        <div class="container">
            <div class="row">
            <div class="form-group row">
                    <form method="POST" action="UpdatePartidos.php?id=<?php echo $id;?>" enctype="multipart/form-data" class="form-inline">
                     
                    
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $row['nombrepa']?>" />

                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion"  value="<?php echo $row['descripcion']?>" />

                            <input type="file" name="logo" class="form-control"/>
                           
                            <select class="form-control" name="estado">                    
                                <?php if ($data['estado'] == 1) { ?> 
                                <option select value=1>Activo</option>
                                <?php }else { ?>
                                <option value=1>Activo</option>
                                <?php } ?>
                                <?php if ($data['estado'] == 0) { ?> 
                                <option select value=0>Inactivo</option>
                                <?php }else { ?>
                                <option value=0>Inactivo</option>
                                <?php } ?>
                                </select>

                                <button type="submit" class="btn btn-success">Guardar Formulario</button>
                                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
                    </form>
                    </div>
                </div>
            </div>
        <div class="main">
        <div class="row">
            <div class="col-text-center">
                <div class="col-sm-12">
                    <img width="80px" height="80px" src="<?php echo  $posted_image; ?>" />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>