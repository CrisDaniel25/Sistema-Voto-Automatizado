<?php
require_once '../../Data/DataBase.php';
require_once '../../Model/Ciudadano/ciudadano.php';

    $db = new DB();

    $query = "SELECT * FROM puesto_electivo";
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

<div class="container">
    <div class="row">
        <form action="AddPuestos.php" method="post" class="form-inline">
            <div class="form-group row">                         
                <input class="form-control" type="text" placeholder="Nombre" name="nombre" />
                <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" />  
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
      
      <div class="row table-responsive">
        <table class="table table-hover">
            <thead class="thead-light">
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
<?php
    if( $result->rowCount() > 0) {
        while($row = $result->fetch()) {
        echo "<tr>";
        echo "<td>".$row['nombrepu']."</td>";
        echo "<td>".$row['descripcion']."</td>";
        if ($row['estado'] == 1) {
            echo "<td>Activo<td>";
        }else {
            echo "<td>Inactivo<td>";
        }
        echo "<td><a href='DeletePuestos.php?id=".$row['puestoid']."' class='btn btn-danger'>
        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
            <path fill-rule='evenodd' d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z'/>
        </svg>
        </a>
        <a href='UpdatePuestos.php?id=".$row['puestoid']."' class='btn btn-warning'>
        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
        </svg>
        </a>
        </td>";
        echo "</tr>";
    }
}
else
{
    echo "<tr><td colspan='10'>No tenemos ninguna informacion</td></tr>";
}
?>          
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>