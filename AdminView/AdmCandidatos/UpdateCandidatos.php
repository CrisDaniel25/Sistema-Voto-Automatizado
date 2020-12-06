
<?php
    require_once '../../Data/DataBase.php';
    require_once '../../Model/Candidatos/candidatos.php';

    $db = new DB();
    $candidatos = new Candidatos();
    if(isset($_GET['id'])){ $candidatos->candidatoid = $_GET['id']; }
    $query = "SELECT * FROM puesto_electivo";
    $resultpuesto = $db->connect()->query($query);
    $query = "SELECT * FROM partidos WHERE partidoid";
    $resultpartido = $db->connect()->query($query);

    if ($_POST && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estado'])) {

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
  <nav class="navbar navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto" style="list-style-type: none">
         <li class="nav-item active">
          <a href="HomeCandidatos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  <div class="container">
    <div class="row">
        <form action="UpdateCandidatos.php?id=<?php echo $candidatos->candidatoid;?>" method="post" class="form-inline" enctype="multipart/form-data">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Apellido" name="apellido" /> 
                <!-- <select class="form-control" name="partido">
                <option value="" style="display: none;">Partido</option>
                <?php while($row = $resultpartido->fetch()) { ?>
                <option value=<?php echo $row['partidoid']?>><?php echo $row['nombre']?></option>
                <?php 
                    }
                ?> 
                </select>
                <select class="form-control" name="puesto">
                <option value="" style="display: none;">Puesto</option>
                <?php while($row = $resultpuesto->fetch()) { ?>
                <option value=<?php echo $row['puestoid']?>><?php echo $row['nombre']?></option>
                <?php 
                    }
                ?> 
                </select> -->
                <input class="form-control" type="file" name="foto" />
                <select class="form-control" name="estado">   
                    <option value="" style="display: none;">Estado</option>        
                    <option value=1>Activo</option>        
                    <option value=0>Inactivo</option>        
                </select>           

                <button type="submit" class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
            </div>
        </form>
    </div>
 </div>
</body>
</html>