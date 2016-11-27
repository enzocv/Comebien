<?php
include_once('../../conexion.php');
$link = Conectarse();
$query_distrito = " SELECT res.fotoPortada,res.nombreRestaurante, tres.nombreTipo, res.precioGeneral, res.direccionRestaurante, avg(votos) as Votos,res.idRestaurante 
                  FROM ranking ran
                  inner join restaurante res
                  on res.idRestaurante = ran.idRestaurante
                  inner join tipodetalle tde
                  on tde.idRestaurante = res.idRestaurante
                  inner join tiporestaurante tres
                  on tres.idTipo = tde.idTipo
                  GROUP BY  res.idRestaurante";


?>
<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Lista de Restaurantes</h2>

    <table class="table table-bordered table-responsive">
        <thead class="">
        <tr >
            <?php
                if($_SESSION["nivelUsuario"] == "Administrador" or $_SESSION["nivelUsuario"] == "Restaurante"){
            ?>
            <th>#</th>
            <?php } ?>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Precio</th>
            <th>Votos</th>
            <th>Foto de portada</th>
        </tr>
        </thead>
        <tbody align="center">
        <?php
        $resultado_distrito = mysql_query($query_distrito) or die("Fallo la Consulta");
        while($busqueda = mysql_fetch_array($resultado_distrito)) {
        ?>
        <tr>
            <?php
                if($_SESSION["nivelUsuario"] == "Administrador" or $_SESSION["nivelUsuario"] == "Restaurante"){
            ?>
            <td scope="row"><?=$busqueda['idRestaurante']?></td>
            <?php } ?>
            <td><a href="../../restaurant.php?id_res=<?=$busqueda['idRestaurante']?>"><?=$busqueda['nombreRestaurante']?></a></td>
            <td><?=$busqueda['direccionRestaurante']?></td>
            <td><?=$busqueda['precioGeneral']?></td>
            <td><?php
                echo $english_format_number = number_format($busqueda['Votos'], 1, '.', '');
                ?>
            </td>
            <td align="center">
                <a href="../../restaurant.php?id_res=<?=$busqueda['idRestaurante']?>">
                    <img style="width: 200px;height: 100px; " height="75em" src="../../images/frestaurants/<?=$busqueda['fotoPortada']?>" alt="">
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>