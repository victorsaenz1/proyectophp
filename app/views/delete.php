<?php

//Abre la conexión al SGBD
if (!($enlace = @mysql_connect("mysql.hostinger.es", "user1", "Osasuna.1") ))
    echo "No se pudo conectar";

//Selecciona la base de datos a utilizar
if (!mysql_select_db("rolegame"))
    echo "No se pudo seleccionar la BBDD";


if (isset($_GET["id"])) {
    $sql = "DELETE FROM creature WHERE idCreature= " . $_GET["id"];
    mysql_query($sql);
    header("Location: ../../index.php");
}

?>
