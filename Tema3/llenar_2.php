<form action="sumar_2.php" method="post">
<?php
$numero = $_POST['n'];

for($i=0;$i<$numero;$i++){
    ?>

    <input type="number" name="valor[]">
    <br>
<?php
}
?>

<input type="submit" value="sumar">
</form>