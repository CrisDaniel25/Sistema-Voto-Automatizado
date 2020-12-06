
<?php
    require_once '../../Data/DataBase.php';
    require_once '../../Model/Candidatos/candidatos.php';

    $db = new DB();
    $candidatos = new Candidatos();
    if(isset($_GET['id'])){ $candidatos->candidatoid = $_GET['id']; }
    
    if (empty($_POST)) { 
        $query = "SELECT * FROM candidatos WHERE candidatoid=$candidatos->candidatoid";
        $result = $db->connect()->query($query);
        $data = $result->fetch();
        $candidatos->puesto = $data['puestoid'];
        $candidatos->partido = $data['partidoid'];
        $posted_image = 'data:image/jpeg;base64,'. base64_encode(stripslashes($data['foto']));
        $query = "SELECT * FROM puesto_electivo WHERE puestoid=$candidatos->puesto";
        $resultpuesto = $db->connect()->query($query);
        $puesto = $resultpuesto->fetch();
        $query = "SELECT * FROM partidos WHERE partidoid=$candidatos->partido";
        $resultpartido = $db->connect()->query($query);
        $partido = $resultpartido->fetch();
    }

    if ($_POST && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estado']) && !empty($_FILES['foto'])) {
        $candidato = new Candidatos();
        $candidato->nombre = $_POST['nombre'];
        $candidato->apellido = $_POST['apellido'];
        $candidato->partido = $_POST['partido'];
        $candidato->puesto = $_POST['puesto'];
        $candidato->foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $candidato->estado = $_POST['estado'];
        $query = "UPDATE candidatos SET nombre='$candidato->nombre',apellido='$candidato->apellido',partidoid='$candidato->partido',puestoid='$candidato->puesto',foto='$candidato->foto',estado='$candidato->estado' WHERE candidatoid={$candidatos->candidatoid}";
        $stat = $db->connect()->query($query);
        header('location: HomeCandidatos.php');
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
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $data['nombre']?>"/>
                <input class="form-control" type="text" placeholder="Apellido" name="apellido" value="<?php echo $data['apellido']?>"/> 
                <select class="form-control" name="partido">
                <option value="<?php echo $puesto['partidoid']?>" style="display: none;"><?php echo $partido['nombrepa']?></option>
                <?php $query = "SELECT * FROM partidos";
                $resultpartido = $db->connect()->query($query);
                while($row = $resultpartido->fetch()) { ?>
                <option value=<?php echo $row['partidoid']?>><?php echo $row['nombrepa']?></option>
                <?php 
                    }
                ?> 
                </select>
                <select class="form-control" name="puesto">
                <option value="<?php echo $puesto['puestoid']?>" style="display: none;"><?php echo $puesto['nombrepu']?></option>
                <?php $query = "SELECT * FROM puesto_electivo";
                $resultpuesto = $db->connect()->query($query);
                while($row = $resultpuesto->fetch()) { ?>
                <option value=<?php echo $row['puestoid']?>><?php echo $row['nombrepu']?></option>
                <?php 
                    }
                ?> 
                </select>
                <input class="form-control" type="file" name="foto"/>
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
            </div>
        </form>
    </div>
    <div class="main">
        <div class="row">
            <div class="col-text-center">
                <div class="col-sm-12">
                    <img width="200px" height="200px" src="<?php echo  $posted_image; ?>" />
                </div>
            </div>
        </div>
    </div>
 </div>
</body>
</html>