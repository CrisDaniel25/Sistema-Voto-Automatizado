
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
      
   
       <script>

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
       </script>
    </head>
    <body>
    <span onclick="openNav()" class="btn btn-info">Iniciar Session</span>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../View/Admin/Login.php">Login</a>
  
</div>

        <div class="main">
            <div class="row">
                <div class="col-text-center">
                    <div class="col-sm-12">
                    <form method="POST" action="index.php">
                        <div class="form-group">
                            <input type="text" id="tt" class="form-control" placeholder="Cedula"/>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-dark" placeholder="Cedula"/>
                        </div>
                    </form>
                        </div>
                </div>
            </div>
        </div>
    </body>
    </html>