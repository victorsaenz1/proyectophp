<?php
//Abre la conexión al SGBD
if (!($enlace = @mysql_connect("mysql.hostinger.es", "user1", "Osasuna.1") )) {
    echo "No se pudo conectar";
}

//Selecciona la base de datos a utilizar
if (!mysql_select_db("rolegame")) {
    echo "No se pudo seleccionar la BBDD";
}
//selecciono todas las criaturas
$sql = "select * from creature";

//se ejecuta la query
$resultado = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Simulacro de examen: Desarrollo web - PHP</title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/small-business.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/small-logo.png" alt="" width="161">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="app/views/insert.php">Crear una criatura</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Heading Row -->
            <div class="row">
                <div class="col-md-8">
                    <img class="img-responsive img-rounded" src="assets/img/main-logo.jpg" alt="">
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <h1>Comunidad de usuarios de Heroes</h1>
                    <p>La aventura comienza aquí, en tu navegador</p>
                    <a class="btn btn-primary btn-lg" href="http://cla.heroes-online.com/es-ES">Juega ahora!</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <hr>
<?php while($fila = mysql_fetch_assoc($resultado)){?>
    

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-4">
                    <h2><?php echo $fila["name"];?></h2>
                    <img src="<?php echo $fila["avatar"];?>" class="img-rounded avatar" width="100"/>
                    <p class="description"><?php echo $fila["description"];?></p>
                    <div class="actions">
                        <a class="btn btn-default" href="app/views/detail.php?id=<?php echo $fila["idCreature"];?>">Más información</a>
                        <a class="btn btn-success" href="app/views/edit.php?id=<?php echo $fila["idCreature"];?>">Modificar</a>
                        <a class="btn btn-danger" href="app/views/delete.php?id=<?php echo $fila["idCreature"];?>">Exterminar</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
<?php } ?>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Eugenia Pérez 2015 - eugeniaperez.es</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

    </body>

</html>
