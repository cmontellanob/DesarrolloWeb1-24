<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Censso 2024</title>
</head>
<body>
    <form action="autenticar.php" method="post">
        <div>
            <label for="correo">Correo Electronico</label>
            <input type="email" name="correo" 
            value="<?php echo isset($_COOKIE['correo'])?$_COOKIE['correo']:'';?>">  
        </div>
        <div>
            <label for="password">Constraseña</label>
            <input type="password" name="password"
            value="<?php echo isset($_COOKIE['password'])?$_COOKIE['password']:'';?>" >
        </div>
        <input type="checkbox" name="recordar_mail" <?php echo isset($_COOKIE['correo'])?'checked':'';?> >Recordar Correo <br>
        <input type="checkbox" name="recordar_password" <?php echo isset($_COOKIE['password'])?'checked':'';?>> Recordar Contraseña <br>
        
        <input type="submit" value="Ingresar">
        <input type="reset" value="Limpiar">
    </form>
    
</body>
</html>