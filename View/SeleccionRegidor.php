
<?php

require_once '../Data/DataBase.php';
require_once '../Model/Elector.php';

    $db = new DB();
    $vt = new Votos();
    $query = "SELECT * FROM candidatos";
    $result = $db->connect()->query($query);


   /*   $query = "SELECT C.id,C.texto,C.publicacionid, U.id, U.nombre, P.publicacionid  FROM comentarios C
        INNER JOIN publicaciones P ON C.publicacionid = P.publicacionid
        INNER JOIN usuario U ON C.id = U.id" ; */
        
          
        $query2 = "SELECT C.puestoid,C.partidoid,C.foto,C.candidatoid,PA.nombrepa,C.apellido, PU.puestoid,PU.nombrepu, 
        PA.partidoid,C.nombre FROM candidatos C
        INNER JOIN puesto_electivo PU ON C.puestoid = PU.puestoid
        INNER JOIN partidos PA ON C.partidoid= PA.partidoid";
        

    /*$query2 = "SELECT * candidatos, p.nombre, pa.nombre
    FROM candidatos join puesto_electivo p on puestoid=p.puestoid join partidos pa on partidoid=pa.partidoid";*/
     $result2 = $db->connect()->query($query2);
   //  $row = $result2->fetch(PDO::FETCH_ASSOC);
     //var_dump($row['nombre']);

     
     $enable_disabled = "disabled";
     if(isset($_GET['id'])){
        $enable_disabled = "enabled";
            if(isset($_POST['voto'])){
                $id = $_GET['id'];
                $vt->SumarVotos($_GET['id']);
              
              
            }
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
<div class="center">
    <div class="row">
        <div class="col col-sm-10">

            
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Puesto Electoral</div>
                <img class="card-img-top" src="../Design/votonull.jpg"  alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">VOTO NULLO, ESTE VOTO NO CONTARA PARA NINGUN CANDIDATO</h5>
                   
                    </div>
                <div class="card-footer bg-transparent border-light">
                    <center><a href="SeleccionPresidente.php?id=<?php echo $row['candidatoid']?>" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                </div>
             </div>

            <?php if($result2->rowCount() > 0):?>
                <?php while($row = $result2->fetch(PDO::FETCH_ASSOC)):?>
                    <?php if($row['nombrepu'] == 'Regidor'):?>
                        <?php $posted_image = 'data:image/jpeg;base64,'. base64_encode(stripslashes($row['foto'])); ?>

            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Puesto Electoral</div>
                <img class="card-img-top" src="<?php echo  $posted_image; ?>"  alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo "Candidato: " . $row['nombre'] . " " . $row['apellido']?></h5>
                    <p class="card-text"><?php echo "Puesto: " . $row['nombrepu']?></p>
                    <p class="card-text"><?php echo "Partido: " . $row['nombrepa']?></p>
                    </div>
                <div class="card-footer bg-transparent border-light">
                    <center><a href="SeleccionRegidor.php?id=<?php echo $row['candidatoid']?>" id="bt" class="btn btn-info"><b>Seleccionar</b></a><center>
                </div>
            </div>
                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
            
        </div>
    </div>
</div>
<div>
        <form method="POST" action="SeleccionRegidor.php?id=<?php echo $_GET['id']?>">
             <input class="btn btn-info btn-lg" type="submit" name="voto" <?php echo $enable_disabled?> value="Continuar"/>
        </form>
    </div>
</body>
</html>