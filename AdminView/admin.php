<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../Design/design.css"/>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
</head>
<body>
<div clas="col text-center ">

<div class="row">
  
   <div class="col-sm-12">
   
   <h1><center>Iniciar Session</center></h1>
   <form method="POST" action="Login.php">
    <div class="form-group">
   <input type="text" name="Correo" class="form-control" placeholder="Correo"/>
    </div>
    <div class="form-group ">
   <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña"/>
    </div> 
    <button type="submit" class="btn btn-outline-light btn-lg">Iniciar Session</button>
    </form>
        <div>
            <a class="btn btn-outline-light btn-lg" href="Registro.php">Crear Cuenta</a>
         </div>
   </div>
</div>
</div>
</body>
</html>