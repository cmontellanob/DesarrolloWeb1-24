<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Persona</h1>
    <?php $id=$_GET['id'];
    include('conexion.php');
    $sql="SELECT id,nombres,apellidos,edad,sexo,ocupacion FROM personas where id=".$id;
    $result = $con->query($sql);
    $datos = $result->fetch_assoc();
    ?>


    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $datos['id'];?> ">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $datos['nombres']; ?>" >
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $datos['apellidos']; ?>" >
        <br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="<?php echo $datos['edad']; ?>" >
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="M" <?php echo $datos['sexo']=='M'?'checked':''?> >Masculino
        <input type="radio" name="sexo" value="F" <?php echo $datos['sexo']=='F'?'checked':''?> >Femenino
        <label for="ocupacion">Ocupacion:</label>
        <input type="text" name="ocupacion" value="<?php echo $datos['ocupacion']; ?>">
        <br>
        <input type="submit" value="Editar">
    
</body>
</html>