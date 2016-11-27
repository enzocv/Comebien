<?php
include_once('../../conexion.php');
$link = Conectarse();

if ($_SESSION['nivelUsuario'] == "Usuario" or $_SESSION['nivelUsuario'] == "Restaurante") {
    $query_reserva = "SELECT res.idReserva, usu.nombreusuario,resta.nombreRestaurante,
                    resta.idRestaurante,res.personas,res.fechaReserva
                    FROM reserva res
                    INNER JOIN usuario usu
                    ON usu.idusuario = res.idusuario
                    INNER JOIN restaurante resta
                    on resta.idRestaurante = res.idRestaurante
                    WHERE usu.idusuario = '{$_SESSION["idUsuario"]}'";
}
else if($_SESSION['nivelUsuario'] == "Administrador"){
    $query_reserva = "SELECT res.idReserva, usu.nombreusuario,resta.nombreRestaurante,
                    resta.idRestaurante,res.personas,res.fechaReserva
                    FROM reserva res
                    INNER JOIN usuario usu
                    ON usu.idusuario = res.idusuario
                    INNER JOIN restaurante resta
                    on resta.idRestaurante = res.idRestaurante";
}

?>
<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Lista de Restaurantes</h2>

    <table class="table table-bordered table-responsive">
        <thead class="">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Restaurante</th>
            <th>Reservaciones</th>
            <th>Fecha de Reserva</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $resultado_reserva = mysql_query($query_reserva) or die("Fallo la Consulta");
        while($busqueda = mysql_fetch_array($resultado_reserva)) {
        ?>
        <tr>
            <td scope="row"><?=$busqueda['idReserva']?></td>
            <td><?=$busqueda['nombreusuario']?></td>
            <td><a href="../../restaurant.php?id_res=<?=$busqueda['idRestaurante']?>"><?=$busqueda['nombreRestaurante']?></a></td>
            <td><?=$busqueda['personas']?></td>
            <td><?=$busqueda['fechaReserva']?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>