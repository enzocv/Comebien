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
            <th>#</th>
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
        <tr >
            <td scope="row"><?=$busqueda['idRestaurante']?></td>
            <td><?=$busqueda['nombreRestaurante']?></td>
            <td><?=$busqueda['direccionRestaurante']?></td>
            <td><?=$busqueda['precioGeneral']?></td>
            <td><?=$busqueda['Votos']?></td>
            <td align="center"><img style="width: 200px;height: 100px; " height="75em" src="../../images/frestaurants/<?=$busqueda['fotoPortada']?>" alt=""></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>