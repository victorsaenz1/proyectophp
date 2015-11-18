<?php

/**
 * Conecta a la base de datos y selecciona la tabla usuarios, que es sobre la que
 * vamos a trabajar.
 */
function conectarBD() {
    //Abre la conexión al SGBD
    if (!($enlace = @mysql_connect("mysql.hostinger.es", "user1", "Osasuna.1") ))
        echo "No se pudo conectar";

    //Selecciona la base de datos a utilizar
    if (!mysql_select_db("rolegame"))
        echo "No se pudo seleccionar la BBDD";
}
if (isset($_GET["id"])) {
    $sql = "SELECT * FROM creature WHERE idCreature= " . $_GET["id"];
    $resultado = mysql_query($sql);
    $registro = mysql_fetch_assoc($resultado);
}
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
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../assets/css/small-business.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="../../index.php">
                        <img src="../../assets/img/small-logo.png" alt="" width="161">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <h2 class="page-title">Crear criatura</h2>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10 creature-value">
                        <?php echo $registro["name"]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10 creature-value" >
                        <?php echo $registro["description"]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10 creature-value">
                        <img src="<?php echo $registro["avatar"]; ?>" width="100"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">Attack Power</label>
                    <div class="col-sm-10 creature-value">
                        <?php echo $registro["attackPower"]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">Life Level</label>
                    <div class="col-sm-10 creature-value">
                        <?php echo $registro["lifeLevel"]; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Weapon</label>
                    <div class="col-sm-10 creature-value">
                        <?php echo $registro["weapon"]; ?>
                    </div>
                </div>
            </div>
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
        <script src="../../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../assets/js/bootstrap.min.js"></script>
    </body>

</html>


