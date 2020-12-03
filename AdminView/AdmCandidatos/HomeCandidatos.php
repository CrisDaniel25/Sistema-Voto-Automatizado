<?php
require_once '../../Data/DataBase.php';
 require_once '../../Model/Candidatos/candidatos.php';

    $db = new DB();
    
    $query = "SELECT * FROM candidatos";
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

    <div>
        <a href="AddCandidatos.php">Agregar</a>
    </div>
    <div class="main">
            <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-12">

                     </div>
                </div>
            </div>
        </div>
</body>
</html>







