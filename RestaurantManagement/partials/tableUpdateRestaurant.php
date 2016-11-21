<?php
include_once('../../conexion.php');
$link = Conectarse();
$query_delete = "SELECT * FROM restaurante r INNER JOIN distrito d on r.idDistrito = d.idDistrito";


?>
<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Lista de Restaurantes</h2>

    <table class="table table-bordered table-responsive">
        <thead class="">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Distrito</th>
            <th>Foto de portada</th>
            <th>Control</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $resultado_delete = mysql_query($query_delete) or die("Fallo la Consulta");
        while($busqueda = mysql_fetch_array($resultado_delete)) {
            ?>
            <tr>
                <td scope="row"><?=$busqueda['idRestaurante']?></td>
                <td><?=$busqueda['nombreRestaurante']?></td>
                <td><?=$busqueda['direccionRestaurante']?></td>
                <td><?=$busqueda['nombreDistrito']?></td>
                <td align="center"><img style="width: 200px;height: 100px; " height="75em" src="../../images/frestaurants/<?=$busqueda['fotoPortada']?>" alt=""></td>
                <td><a href="../view/updateRestaurante_view.php?idRestaurante=<?=$busqueda['idRestaurante']?>">Modificar</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>