<?php
include_once('../../conexion.php');
$link = Conectarse();

$query_distrito = "SELECT * FROM distrito";
$resultado_distrito = mysql_query($query_distrito);

?>
<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Gestion de Restaurante</h2>
    <form action="../controls/addRestaurant.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nameRestaurant" class="control-label">Nombre Restaurante:</label>
            <input type="text" name="nameRestaurant" id="nameRestaurant" class="form-control">
        </div>

        <div class="form-group">
            <label for="descriptionRestaurant">Descripcion:</label>
            <textarea name="descriptionRestaurant" id="descriptionRestaurant" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="detailRestaurant">Detalle:</label>
            <textarea name="detailRestaurant" id="detailRestaurant" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="priceRestaurant">Precio Genaral:</label>
            <input type="text" name="priceRestaurant" id="priceRestaurant" class="form-control">
        </div>

        <div class="form-group">
            <label for="imageRestaurant">Imagen de Portada:</label>
            <input type="file" name="imageRestaurant" value="Seleccionar Imagen">
        </div>

        <div class="form-group">
            <label for="capacityRestaurant">Capacidad:</label>
            <input type="text" name="capacityRestaurant" id="capacityRestaurant" class="form-control">
        </div>
        <div class="form-group">
            <label for="servicesRestaurant">Servicios Adicionales:</label>
            <input type="text" name="servicesRestaurant" id="servicesRestaurant" class="form-control">
        </div>

        <div class="form-group">
            <label for="addressRestaurant">Dirección:</label>
            <input type="text" name="addressRestaurant" id="addressRestaurant" class="form-control">
        </div>

        <div class="form-group">
            <label for="chanceRestaurant">Ocaciones:</label>
            <input type="text" name="chanceRestaurant" id="chanceRestaurant" class="form-control">
        </div>

        <div class="form-group">
            <label for="districtRestaurant">Distrito:</label>
            <select name="districtRestaurant" id="districtRestaurant" class="form-control">
                <?php
                if ($resultado_distrito) {
                    while ($campo_distrito = mysql_fetch_array($resultado_distrito)) {
                        $nombre = $campo_distrito['nombreDistrito'];
                        $id_distrito = $campo_distrito['idDistrito'];

                        echo "<option value=".$id_distrito.">".$nombre."</option>\n";
                    }
                    mysql_close();
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="menuRestaurant">Carta:</label>
            <textarea name="menuRestaurant" id="menuRestaurant" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <input type="submit" name="Guardar" value="Guardar" class="btn btn-success">
    </form>
</div>