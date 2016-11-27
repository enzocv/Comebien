<?php
include_once('../../conexion.php');
$link = Conectarse();

if ($_SESSION['nivelUsuario'] == "Usuario" or $_SESSION['nivelUsuario'] == "Restaurante") {

    $query_reserva = "SELECT * FROM usuario WHERE idusuario ='{$_SESSION["idUsuario"]}'";

}
else if($_SESSION['nivelUsuario'] == "Administrador"){
    $query_reserva = "SELECT usu.idusuario,usu.email,usu.contrasena, usu.nombreusuario,
                        usu.apellidousuario, nivel.nombrenivelusuario, esta.nombreestado
                        FROM usuario usu
                        INNER JOIN nivelusuario nivel
                        ON nivel.idnivelusuario = usu.idnivelusuario
                        INNER JOIN estadousuario esta
                        ON esta.idestadousuario = usu.idestadousuario";
}

?>
<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Mi Cuenta</h2>
    <?php
    $resultado_reserva = mysql_query($query_reserva) or die("Fallo la Consulta");
    while($busqueda = mysql_fetch_array($resultado_reserva)) {
        ?>

    <form action="../controls/updateUsers.php" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?=$busqueda['nombreusuario']?>" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" value="<?=$busqueda['apellidousuario']?>" id="lastname" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?=$busqueda['email']?>" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" value="<?=$busqueda['contrasena']?>" id="password" class="form-control">
        </div>

        <input type="hidden" name="id_usuario" value="<?=$busqueda['idusuario']?>">

        <div class="form-group">
            <input type="submit" name="modify" value="Guardar" class="btn btn-success">
        </div>
    </form>

    <?php
        }
    ?>
</div>