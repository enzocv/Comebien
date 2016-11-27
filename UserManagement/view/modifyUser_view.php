<?php
include_once ("../../conexion.php");
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>ComeBien|Modificar Cuenta</title>
</head>
<body>
<!--   HEADER      -->
<?php include_once('../partials/headerUser.php');?>

<!--   BODY      -->
<?php include_once('../partials/modifyUser.php');?>


<!--   FOOTER      -->
<?php include_once('../partials/footerUser.php');?>
</body>
</html>