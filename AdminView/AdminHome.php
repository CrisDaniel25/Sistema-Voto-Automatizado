
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
    <title>Document</title>
    <link rel="stylesheet" href="../Design/design.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
     <style>

        .divbt:hover{
            background:#252525;
            cursor:pointer;
        }

     </style>
      
</head>
<body>

<div>

<div class="card text-white bg-info mb-2" style="max-width: 15rem;">

  <div class="card-body text-light">
    <h5 class="card-title">Candidadatos</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="divbt">
  <div class="card-footer bg-transparent border-light ">
    
    Administrar
 
  </div>
    </div>
</div>

<div class="card text-white bg-info mb-2" style="max-width: 15rem;">

  <div class="card-body text-light">
    <h5 class="card-title">Ciudadanos</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="divbt">
  <div class="card-footer bg-transparent border-light ">
    
    Administrar
 
  </div>
    </div>
</div>


</div>

</body>
</html>