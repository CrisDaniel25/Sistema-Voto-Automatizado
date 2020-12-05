<?php



    require_once '../../AdminModel/ManagePuesto.php';

    $managepuesto = new ManagePuesto();
    $result = $managepuesto->MostrarPuestos();

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
            .row{
                margin-left:30px;
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
<<<<<<< HEAD
    <a class="btn btn-dark" href="AddPuestos.php">Agregar</a>
    <div class="row">
            <div class="col col-3">
            <div class="card" style="width: 18rem;">
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $row['nombrepu']?></h4>
                    <p class="card-text"><?php echo $row['descripcion']?></p>
                    <a href="#" ><li data-id="<?php echo $row['puestoid']?>" class="glyphicon glyphicon-pencil cll"></li></a>
                    <a href="#" ><li data-id="<?php echo $row['puestoid']?>" class="glyphicon glyphicon-trash cl"></li></a>
                </div>
                <?php endwhile?>
                </div>
            </div>
        </div>

    <script>

$(document).ready(function(){

    $(".cl").on("click", function(e){
    e.preventDefault();

        let id = $(this).data("id");
       window.location.href = "DeletePuestos.php?id=" + id;


    }); 
    $(".cll").on("click", function(e){
    e.preventDefault();

        let id = $(this).data("id");
       window.location.href = "UpdatePuestos.php?id=" + id;


    }); 
   
    });
    </script>    

</body>
</html>