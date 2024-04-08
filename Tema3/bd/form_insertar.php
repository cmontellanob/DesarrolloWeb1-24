<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php');
    include('verificar.php');
    include('permisos.php');
    $sql = "Select id,nombre from ocupaciones";
    $result = $con->query($sql);
    ?>
    <h1>Insertar Persona</h1>
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <label for="fotografia">Fotografia</label>
        <input type="file" name="fotografia"><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad">
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="M">Masculino
        <input type="radio" name="sexo" value="F">Femenino
        <label for="ocupacion">Ocupacion:</label>
        <select name="ocupacion_id">
            <?php while ($ocupacion = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $ocupacion['id'] ?>"><?php echo $ocupacion['nombre'] ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Insertar">
</body>
</html>