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
<header>
    <nav class="navbar navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto" style="list-style-type: none">
         <li class="nav-item active">
          <a href="HomePartidos.php" class="btn btn-danger"><span>Volver</span></a>
         </li>
        </ul>
    </nav>
  </header>
  <div class="container">
    <div class="row">
        <form action="../../AdminController/AdmPartidos.php" method="post" class="form-inline" enctype="multipart/form-data">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" /> 
                <input class="form-control" type="file" name="logo" />
                <select class="form-control" name="estado">   
                    <option value="" style="display: none;">Estado</option>        
                    <option value=1>Activo</option>        
                    <option value=0>Inactivo</option>        
                </select>           

                <button type="submit" class="btn btn-success">Guardar Formulario</button>
                <button type="reset" value="Clear" class="btn btn-danger">Borrar Formulario</button>
            </div>
        </form>
    </div>
</body>
</html>
