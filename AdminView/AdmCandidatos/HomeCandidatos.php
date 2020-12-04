<?php
 require_once '../../Data/DataBase.php';
 require_once '../../Model/Candidatos/candidatos.php';
 require_once '../../AdminModel/ManageCandidatos.php';

  /*  $db = new DB();
    
    $query = "SELECT * FROM candidatos";
    $result = $db->connect()->query($query);*/

    $managecandidato = new ManageCandidatos();
    $result = $managecandidato->mostrarcandidatos();
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
          <a href="../AdminHome.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>

    <div>
        <a href="AddCandidatos.php">Agregar</a>
    </div>
    
            <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-8">
                        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                            <?php $posted_image = "data:image/jpg;base64,". base64_encode($row['foto']); ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo  $posted_image; ?>" />
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['nombre']?></p>

                        </div>
                        <a href="#" ><li data-id="<?php echo $row['candidatoid']?>" class="glyphicon glyphicon-pencil cll"></li></a>
                        <a href="#" ><li data-id="<?php echo $row['candidatoid']?>" class="glyphicon glyphicon-trash cl"></li></a>
                
                        </div>
                        <?php endwhile?>
                     </div>
                </div>
            </div>
        
</body>
</html>







