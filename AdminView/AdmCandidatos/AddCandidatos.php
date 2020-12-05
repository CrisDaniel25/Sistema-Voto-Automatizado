
<?php

    require_once '../../AdminModel\ManagePuesto.php';
    require_once '../../AdminModel\ManagePartido.php';
    

    $managepartido = new ManagePartido();
    $managepuesto = new ManagePuesto();
   

    $resultpartido =  $managepartido->FilterNombrePartido();
    $resultpuesto =  $managepuesto->FilterNombrePuesto();

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
                    <form method="POST" action="../../AdminController/AdmCandidatos.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
                        <div>
                        <div class="form-group">
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido"/>
                        <div>
                        <div class="form-group">
                            <select class="form-control" name="partido" id="exampleFormControlSelect1">
                            <?php while($row = $resultpartido->fetch(PDO::FETCH_ASSOC)):?>

                            <option value=<?php echo $row['partidoid']?>><?php echo $row['nombrepa']?></option>
                            <?php endwhile?>
                            </select>
                            <select class="form-control" name="puesto" id="exampleFormControlSelect1">
                            <?php while($row = $resultpuesto->fetch(PDO::FETCH_ASSOC)):?>

                            <option value=<?php echo $row['puestoid']?>><?php echo $row['nombrepu']?></option>
                            <?php endwhile?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="estado" id="exampleFormControlSelect1">
                           
                            <option>Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control"/>
                        <div>
                            <input type="submit" class="btn btn-dark" value="Agregar"/>
                        
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
