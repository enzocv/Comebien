<?php

include_once("conexion.php");

$link = Conectarse();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

echo "$usuario";
echo "$password";

$sql = "SELECT * FROM usuario WHERE email = '$usuario' and contrasena = '$password'";
$rs = mysql_query($sql);
$n = mysql_num_rows($rs);
$campo = mysql_fetch_array($rs);



if (isset($_POST['entrar'])){
    if (mysql_num_rows($rs) != 0) {
        session_start();
        $_SESSION["autentificado"] = "SI";
        header("Location: principal.php");
    }
    else{
        header("Location: search.php");
    }
}
elseif (isset($_POST['salir'])){
//    session_start();
//    session_destroy();
//    header("Location: principal.php?close");
}

mysql_free_result($rs);
mysql_close();

