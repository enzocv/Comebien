<div class="container" style="padding: 1em 0;">
    <h2 class="" style="padding: 0 0 .5em">Gestion de Restaurante</h2>
    <form action="../addRestaurant.php" method="POST">
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
            <input type="text" name="imageRestaurant" id="imageRestaurant" class="form-control">
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
            <select name="district" id="districtRestaurant" class="form-control">
                <option value="Tacna">Tacna</option>
            </select>
        </div>

        <div class="form-group">
            <label for="menuRestaurant">Carta:</label>
            <textarea name="menuRestaurant" id="menuRestaurant" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <input type="submit" name="Guardar" value="Guardar" class="btn btn-success">
    </form>
</div>