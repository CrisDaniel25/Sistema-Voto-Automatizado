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
  <div class="container">
    <div class="row">
        <form action="AddPartidos.php" method="post" class="form-inline" id="formulario">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" />             
                <input class="form-control" type="file" placeholder="Logo" name="logo" />  
                <select class="form-control">   
                    <option value="" style="display: none;" name="estado">Estado</option>        
                    <option value=true>Activo</option>        
                    <option value=false>Inactivo</option>        
                </select>           

                <button class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
            </div>
        </form>
    </div>

         
            </tbody>
        </table>
    </div>
  </div>
  
  <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-8">
                        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)):?>
                            <?php $posted_image = "data:image/jpg;base64,". base64_encode($row['logo']); ?>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo  $posted_image; ?>" />
                        <div class="card-body">
                            <p class="card-text"><?php echo $row['nombre']?></p>
                        </div>
                        <a href="#" ><li data-id="<?php echo $row['partidoid']?>" class="glyphicon glyphicon-pencil edt"></li></a>
                    <a href="#" ><li data-id="<?php echo $row['partidoid']?>" class="glyphicon glyphicon-trash del"></li></a>
                
                        </div>
                        <?php endwhile?>
                     </div>
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