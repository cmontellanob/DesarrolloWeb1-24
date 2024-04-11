<?php
try 
{
$con = new mysqli("localhost4", "root", "", "bd_censo");
}
catch(Exception $e)
{
    die("Error al conectarse a la base de datos ".$e->getMessage());

}
$result = $con->query("SELECT * FROM personas ");


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Nombres: " . $row["nombres"] . " " . $row["apellidos"] . "<br>";
    }
} else {
    echo "0 results";
}

?>