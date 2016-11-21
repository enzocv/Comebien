<?php

include_once("conexion.php");

$link = Conectarse();
if (isset($_POST['entrar'])){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT usu.idusuario,usu.nombreusuario,usu.apellidousuario,niv.nombrenivelusuario
            FROM usuario usu
            INNER JOIN nivelusuario niv
            on niv.idnivelusuario = usu.idnivelusuario
            WHERE email='{$usuario}' and contrasena='{$password}'";
    $rs = mysql_query($sql);
    $n = mysql_num_rows($rs);
    $campo = mysql_fetch_array($rs);


    if (mysql_num_rows($rs) != 0) {
        session_start();
        $_SESSION["autentificado"] = "SI";
        $_SESSION["nombreUsuario"] = $campo["nombreusuario"];
        $_SESSION["apellidoUsuario"] = $campo["apellidousuario"];
        $_SESSION["idUsuario"] = $campo["idusuario"];
        $_SESSION["nivelUsuario"] = $campo["nombrenivelusuario"];
        header("Location: principal.php?");
    }
    else{
        header("Location: index.php");
    }
    mysql_free_result($rs);
    mysql_close();
}
elseif (isset($_GET['salir'])){
    session_start();
    session_destroy();
    header("Location: index.php?");
}

