<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');


    $sql = "Select id,editorial from editoriales";
    $result = $con->query($sql);
    ?>
    <h1>Insertar Libro 1</h1>
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <div class="conteiner" style="display: flex;">
            <div>

                <label for="imagen">imagen</label>
                <input type="file" name="imagen"><br>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo">
                <br>
                <label for="autor">Autor:</label>
                <input type="text" name="autor">
                <br>
                <label for="editorial">Editorial:</label>
                <select name="ideditorial">
                    <?php while ($editorial = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
                    <?php } ?>
                </select>
                <label for="anio">Año:</label>
                <br>

                <input type="number" name="anio">
                <br>
            </div>
            <div>

                <label for="imagen">imagen</label>
                <input type="file" name="imagen2"><br>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo2">
                <br>
                <label for="autor">Autor:</label>
                <input type="text" name="autor2">
                <br>
                <label for="editorial">Editorial:</label>
                <select name="ideditorial2">
                    <?php  $result = $con->query($sql); while ($editorial = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
                    <?php } ?>
                </select>
                <label for="anio">Año:</label>
                <br>

                <input type="number" name="anio2">
                <br>
            </div>

        </div>

        <input type="submit" value="Insertar">
</body>

</html>