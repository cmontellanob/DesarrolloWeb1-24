<?php session_start();
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
include('conexion.php');
$sql = "SELECT correo,nivel from usuarios where correo='$correo' 
and password='$password'";
//echo $sql;

$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
  if (isset($_POST['recordar_mail'])) {
    setcookie("correo", $correo, time() + 3600);
  } else {
    setcookie("correo", '', time() + 3600);
  }
  if (isset($_POST['recordar_password'])) {
    setcookie("password", $_POST['password'], time() + 3600);
  } else {
    setcookie("password", '', time() + 3600);
  }

  echo "contraseña correcta";
} else {
  echo "Error usuario o Conatraseña no valido";
}
