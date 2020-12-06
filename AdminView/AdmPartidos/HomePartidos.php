<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/PuestoElectoral/puesto.php';

    $db = new DB();
    
    $query = "SELECT * FROM partidos";
    $result = $db->connect()->query($query);

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

    
        <style>
        
            body{
                color:#ffffff;
            }

        </style>
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
        <a class="btn btn-primary" href="AddCandidatos.php">Agregar Nuevo Candidato</a>
    </div>
    
            <div class="row">
                    <div class="col-sm-8">
                        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                            <?php $posted_image = 'data:image/jpeg;base64,'. base64_encode(stripslashes($row['logo'])); ?>
                    <div class="card" style="width: 18rem;">
                        <img width="80px" height="80px" class="card-img-top" src="<?php echo  $posted_image; ?>" />
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['nombre']?></p>

                        </div>
                        <a href="UpdateCandidatos.php?id=<?php echo $row['candidatoid']?>" ><li data-id="<?php echo $row['candidatoid']?>" class="glyphicon glyphicon-pencil cll"></li></a>
                        <a href="#" ><li data-id="<?php echo $row['candidatoid']?>" class="glyphicon glyphicon-trash cl"></li></a>
                
                        </div>
                        <?php endwhile?>
                     </div>

            </div>


            
    <script>

$(document).ready(function(){

    $(".del").on("click", function(e){
    e.preventDefault();

        let id = $(this).data("id");
       window.location.href = "DeletePuestos.php?id=" + id;


    }); 
    $(".edt").on("click", function(e){
    e.preventDefault();

        let id = $(this).data("id");
       window.location.href = "UpdatePartidos.php?id=" + id;


    }); 
   
    });
    </script>  
</body>
</html>