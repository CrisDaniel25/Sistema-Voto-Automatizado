
<?php

    if(!empty($_POST['cedula'])){

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Design/design.css"/>
        <link rel="stylesheet" href="../css/Style.css"/>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
   <style>
   body{
       background:#000000;
   }
        .center{
            width: 60%;
            height:380px;
            margin: 0 auto;
            margin-top:50px;
            padding: 140px;
            border-radius: 12px;
        }
       #bt{
           width:100%;
           
       }
    
       
   </style>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto" style="list-style-type: none">
         <li class="nav-item active">
          <a href="../index.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
    <div class="center">
        <div class="row">
            <div class="col col-sm-10">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Puesto Electoral</div>
                    <div class="card-body">
                    <h5 class="card-title">Presidente</h5>
                    <p class="card-text">Solo son buenos robando</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">
                        <center><a href="SeleccionPresidente.php" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Puesto Electoral</div>
                    <div class="card-body">
                    <h5 class="card-title">Senador</h5>
                    <p class="card-text">Solo son buenos robando</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">
                        <center><a href="SeleccionSenador.php" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Puesto Electoral</div>
                    <div class="card-body">
                    <h5 class="card-title">Regidor</h5>
                    <p class="card-text">Solo son buenos robando</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">
                        <center><a href="SeleccionRegidor.php" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Puesto Electoral</div>
                    <div class="card-body">
                    <h5 class="card-title">Diputado</h5>
                    <p class="card-text">Solo son buenos robando</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">
                        <center><a href="SeleccionDiputado.php" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>