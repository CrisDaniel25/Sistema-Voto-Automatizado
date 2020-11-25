

    <?php
    
    

    ?>

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
 
        <div class="main">
            <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-12">
                    <form method="POST" action="../AdminController/AdminLogin.php">
                        <div class="form-group">
                            <input type="text" id="tt" class="form-control" name="correo" placeholder="Correo" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="tt" class="form-control" name="clave" placeholder="Clave" required/>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-dark" value="Iniciar Session"/>
                        </div>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </body>
    </html>