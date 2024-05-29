<?php
include("conexion.php");
$sql = "SELECT imagen,titulo from libros ";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>
    <table >
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><a href="javascript:mostrarimagen('<?php echo $row["imagen"];  ?> ')"> <img src="images/<?php echo $row["imagen"];  ?>" alt="<?php echo $row["titulo"];  ?>" width="50" height="50"></a></td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>
<img src="" alt="">