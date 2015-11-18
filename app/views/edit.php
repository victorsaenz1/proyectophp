<?php
//Abre la conexión al SGBD
if (!($enlace = @mysql_connect("mysql.hostinger.es", "user1", "Osasuna.1") )) {
    echo "No se pudo conectar";
}

//Selecciona la base de datos a utilizar
if (!mysql_select_db("rolegame")) {
    echo "No se pudo seleccionar la BBDD";
}

if(isset($_GET["id"])){
    $sql = "select * from creature where idCreature=".$_GET["id"];
    $resultado = mysql_query($sql);
    $registro = mysql_fetch_assoc($resultado);
}
 else { //Se entiende que viene por POST
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $avatar = $_POST["avatar"];
    $attackPower = $_POST["attackPower"];
    $lifeLevel = $_POST["lifeLevel"];
    $weapon = $_POST["weapon"];

    $sql = "UPDATE creature SET name='" . $name . "', description='" . $description . "', avatar='" . $avatar . "', attackPower=" . $attackPower . ",lifeLevel=" . $lifeLevel . ",weapon='" . $weapon . "'" .
            "WHERE idCreature=" . $id;

    $resultado = mysql_query($sql) or die(mysql_error());
    header("Location: ../../index.php");
}
?>

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
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $registro["name"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description"value="<?php echo $registro["description"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Avatar"value="<?php echo $registro["avatar"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">Attack Power</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="attackPower" name="attackPower" placeholder="AttackPower"value="<?php echo $registro["attackPower"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">Life Level</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lifeLevel" name="lifeLevel" placeholder="LifeLevel"value="<?php echo $registro["lifeLevel"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Weapon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="weapon" name="weapon" placeholder="Weapon"value="<?php echo $registro["weapon"];?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $registro["idCreature"]; ?>">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create</button>
                    </div>
                </div>
            </form>

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


