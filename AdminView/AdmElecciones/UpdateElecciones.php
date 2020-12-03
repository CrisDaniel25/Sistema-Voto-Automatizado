<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/Elecciones/elecciones.php';
    $db = new DB();
    $isContainid = isset($_GET['id']);
    if ($isContainid) { $eleccionesid = $_GET['id']; }

    if (empty($_POST)) {    
       // echo "<p>Without Post</p>";
        $query = "SELECT * FROM elecciones WHERE eleccionesid={$eleccionesid}";
        $result = $db->connect()->query($query);
        $data = $result->fetch();
        $elecciones =  new Elecciones($data['eleccionesid'],$data['nombre'],$data['fecha'],$data['estado']);
    }

    if ($_POST && isset($_POST['nombre']) && isset($_POST['fecha']) && isset($_POST['estado'])) {
        echo "<p>Post</p>";
        $elecciones =  new Elecciones($eleccionesid,$_POST['nombre'],$_POST['fecha'],$_POST['estado']);
        $elecciones->estado = $_POST['estado'];
        $query = "UPDATE elecciones SET nombre='$elecciones->nombre',fecha='$elecciones->fecha',estado='$elecciones->estado' WHERE eleccionesid={$eleccionesid}";
        $db->connect()->query($query);
        header("location: HomeElecciones.php");
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
          <a href="HomeElecciones.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  <div class="container">
    <div class="row">
        <form action="UpdateElecciones.php?id=<?php echo $elecciones->eleccionesid;?>" method="post" class="form-inline">
            <div class="form-group row">                            
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $elecciones->nombre?>" />                
                <input class="form-control" type="date" placeholder="Fecha" name="fecha" value="<?php echo $elecciones->fecha?>" />                
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
</body>
</html>