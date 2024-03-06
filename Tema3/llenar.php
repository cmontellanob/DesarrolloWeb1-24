<form action="sumar.php" method="post">
<?php
$numero = $_POST['n'];

for($i=0;$i<$numero;$i++){
    ?>

    <input type="number" name="valor<?php echo $i?>">
    <br>
<?php
}
?>
<input type="hidden" name="n" value="<?php echo $numero?>">
<input type="submit" value="sumar">
</form>