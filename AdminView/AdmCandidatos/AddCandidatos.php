<?php
    require_once '../../Data/DataBase.php';

    $db = new DB();

    $query = "SELECT * FROM puesto_electivo";
    $result1 = $db->connect()->query($query);
    $query = "SELECT * FROM partidos";
    $resultpartido = $db->connect()->query($query);
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
          <a href="HomeCandidatos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  <div class="container">
    <div class="row">
        <form action="AddPuestos.php" method="post" class="form-inline" enctype="multipart/form-data">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Apellido" name="apellido" /> 
                <select class="form-control" name="partido">
                <option value="" style="display: none;">Partido</option>
                <?php while($row = $resultpartido->fetch()) { ?>
                <option value=<?php echo $row['partidoid']?>><?php echo $row['nombre']?></option>
                <?php }?> 
                </select>
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
                    <!-- <form method="POST" action="../../AdminController/AdmCandidatos.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
                        <div>
                        <div class="form-group">
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido"/>
                        <div> -->
                        <!-- <div class="form-group">
                            <select class="form-control" name="partido" id="exampleFormControlSelect1">
                            <?php while($row = $resultpartido->fetch(PDO::FETCH_ASSOC)):?>

                            <option value=<?php echo $row['partidoid']?>><?php echo $row['nombre']?></option>
                            <?php endwhile?>
                            </select>
                            <select class="form-control" name="puesto" id="exampleFormControlSelect1">
                            <?php while($row = $resultpuesto->fetch(PDO::FETCH_ASSOC)):?>

                            <option value=<?php echo $row['puestoid']?>><?php echo $row['nombre']?></option>
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
                            <input type="submit" class="btn btn-dark" value="Agregar"/> -->
                        
                        
                    <!-- </form>
                    </div>
                </div>
            </div>
        </div> -->
</body>
</html>
