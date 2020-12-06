<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/PuestoElectoral/puesto.php';

    $db = new DB();
    $isContainid = isset($_GET['id']);
    if ($isContainid) { $puestoid = $_GET['id']; }

    if (empty($_POST)) { 
        $query = "SELECT * FROM puesto_electivo WHERE puestoid={$puestoid}";
        $result = $db->connect()->query($query);
        $data = $result->fetch();
        $puesto =  new Puesto();
        $puesto->puestoid = $data['puestoid'];
        $puesto->nombre = $data['nombre']; $puesto->descripcion = $data['descripcion']; $puesto->estado = $data['estado'];
    }

    if ($_POST && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
        $puesto = new Puesto();
        $puesto->nombre = $_POST['nombre']; $puesto->descripcion = $_POST['descripcion']; $puesto->estado = $_POST['estado'];
        $query = "UPDATE puesto_electivo SET nombre='$puesto->nombre',descripcion='$puesto->descripcion',estado='$puesto->estado' WHERE puestoid={$puestoid}";
        $db->connect()->query($query);
        header("location: HomePuestos.php");
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
          <a href="HomePuestos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  
  <div class="container">
    <div class="row">
        <form action="UpdatePuestos.php?id=<?php echo $puesto->puestoid;?>" method="post" class="form-inline">
            <div class="form-group row">                           
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $puesto->nombre?>" />
                <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" value="<?php echo $puesto->descripcion?>" /> 
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

                <button class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>

            </div>
        </form>
    </div>
    </div>
</body>
</html>