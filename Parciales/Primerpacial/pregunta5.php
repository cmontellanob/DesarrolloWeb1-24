<?php
include("conexion.php");
if (isset($_GET['ordenar'])) {
    $ordenar = $_GET['ordenar'];
} else {
    $ordenar = "id";
}

if (isset($_GET['orden'])) {
    $orden = $_GET['orden'];
} else {
    $orden = "ASC";
}

$sql = "SELECT l.id,imagen,titulo,autor,e.editorial,anio FROM libros l
    LEFT JOIN editoriales e on l.ideditorial=e.id order by $ordenar $orden";

//echo $sql;
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>
    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Imagen</th>
            <th><a href="pregunta5.php?ordenar=titulo<?php
                                                        if ($ordenar == "titulo") {
                                                            if ($orden == 'ASC')
                                                            {
                                                                $orden = 'DESC';
                                                            } 
                                                            else{
                                                                $orden =  'ASC';
                                                            }
                                                            
                                                            echo "&orden=$orden";
                                                        }
                                                        ?>">Titulo</a></th>
            <th><a href="pregunta5.php?ordenar=autor<?php
                                                        if ($ordenar == "autor") {
                                                            if ($orden == 'ASC')
                                                            {
                                                                $orden = 'DESC';
                                                            } 
                                                            else{
                                                                $orden =  'ASC';
                                                            }
                                                            echo "&orden=$orden";
                                                        }
                                                        ?>">Autor</a></th>
            <th><a href="pregunta5.php?ordenar=editorial<?php
                                                        if ($ordenar == "editorial") {
                                                            if ($orden == 'ASC')
                                                            {
                                                                $orden = 'DESC';
                                                            } 
                                                            else{
                                                                $orden =  'ASC';
                                                            }
                                                            echo "&orden=$orden";
                                                        }
                                                        ?>">Editorial</a></th>
            <th><a href="pregunta5.php?ordenar=anio<?php
                                                        if ($ordenar == "anio") {
                                                            if ($orden == 'ASC')
                                                            {
                                                                $orden = 'DESC';
                                                            } 
                                                            else{
                                                                $orden =  'ASC';
                                                            }
                                                            echo "&orden=$orden";
                                                        }
                                                        ?>">Año</a></th>

        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["editorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>

            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>