<?php
include_once('../../conexion.php');
$link = Conectarse();

if ($_SESSION['nivelUsuario'] == "Usuario" or $_SESSION['nivelUsuario'] == "Restaurante") {
    $query_reserva = "SELECT usu.idusuario,usu.email,usu.contrasena, usu.nombreusuario,
                        usu.apellidousuario, nivel.nombrenivelusuario, esta.nombreestado
                        FROM usuario usu
                        INNER JOIN nivelusuario nivel
                        ON nivel.idnivelusuario = usu.idnivelusuario
                        INNER JOIN estadousuario esta
                        ON esta.idestadousuario = usu.idestadousuario
                        WHERE usu.idusuario = '{$_SESSION["idUsuario"]}'";
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
    <h2 class="" style="padding: 0 0 .5em">Lista de Reservas</h2>

    <table class="table table-bordered table-responsive">
        <thead class="">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $resultado_reserva = mysql_query($query_reserva) or die("Fallo la Consulta");
        while($busqueda = mysql_fetch_array($resultado_reserva)) {
            ?>
            <tr>
                <td scope="row"><?=$busqueda['idusuario']?></td>
                <td><?=$busqueda['nombreusuario'] . $busqueda['apellidousuario']?></td>
                <td><?=$busqueda['email']?></td>
                <td>
                    <a href="#">Detalle</a>
                    <a href="#">Modificar</a>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>