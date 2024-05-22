<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $id=$_GET['id'];
    include('conexion.php');
    
    $sql="SELECT id,fotografia,nombres,apellidos,edad,sexo,ocupacion_id FROM personas where id=".$id;
    $result = $con->query($sql);
    $datos = $result->fetch_assoc();

    $sql="SELECT id,nombre from ocupaciones";
    $resultocupa = $con->query($sql);

    ?>
<h1>Editar Persona</h1>

    <form action="javascript:editarPersona()" method="post" enctype="multipart/form-data" id="form-editar">
        <img src="images/<?php echo $datos['fotografia']?>" >
        <br>
        <label for="fotografia">Fotografia</label>
        <input type="file" name="fotografia" ><br>
        <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
        <input type="hidden" name="foto" value="<?php echo $datos['fotografia'];?>">
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
        <select name="ocupacion_id" >
            <?php while ($ocupacion = $resultocupa->fetch_assoc()) {
        ?>
        <option value="<?php  echo $ocupacion['id'] ?>"   
        <?php echo $ocupacion['id']==$datos['ocupacion_id']?"selected":"";?>
        
        ><?php  echo $ocupacion['nombre'] ?></option>
        <?php }?>
         </select>
        <br>
        <input type="submit" value="Editar">
    </form>
    
</body>
</html>