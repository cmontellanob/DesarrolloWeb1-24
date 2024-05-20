    <?php include('conexion.php');
    $sql = "Select id,nombre from ocupaciones";
    $result = $con->query($sql);
    ?>
    <h1>Insertar Persona</h1>
    <form action="javascript:insertar()" method="post" id="datos-persona">
        <label for="fotografia">Fotografia</label>
        <input type="file" name="fotografia" id="fotografia"><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos">
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad">
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="M" id="sexo_m">Masculino
        <input type="radio" name="sexo" value="F" id="sexo_f">Femenino
        <label for="ocupacion">Ocupacion:</label>
        <select name="ocupacion_id" id="ocupacion_id">
            <?php while ($ocupacion = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $ocupacion['id'] ?>"><?php echo $ocupacion['nombre'] ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Insertar">

    </form>