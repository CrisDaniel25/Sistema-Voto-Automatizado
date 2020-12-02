
<?php

require_once '../AdminModel/admin.php';
require_once '../Design/layout.php';

session_start();

$admin = new Administrador();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema de Voto Automatizado</title>
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Design/design.css"/>
        <link rel="stylesheet" href="../css/Style.css"/>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <h4>Menu</h4>
    </nav>
  </header>
    <div class="main">
        <div class="row">
                <ul style="list-style-type: none">
                    <li>
                        <a href="AdmCandidatos/HomeCandidatos.php" class="btn btn-primary btn-lg btn-block">Candidatos</a>
                    </li>
                    <li>
                        <a href="AdmPartidos/HomePartidos.php" class="btn btn-primary btn-lg btn-block">Partidos</a>
                    </li>
                    <li>

                        <a href="AdmPuestos/HomePuestos.php" class="btn btn-primary btn-lg btn-block">Puesto electivo</a>

                      
                    </li>
                    <li>
                        <a href="AdmCiudadanos/HomeCiudadanos.php" class="btn btn-primary btn-lg btn-block">Ciudadanos</a>
                    </li>
                    <li>
                        <a href="AdmElecciones/HomeElecciones.php" class="btn btn-primary btn-lg btn-block">Elecciones</a>
                    </li>
                </ul>
        </div>    
    </div>
</body>
</html>