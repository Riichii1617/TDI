<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>
    <form action="loginController.php" method="POST">
        Usuario: <input type="text" name="usuario"> <br><br>
        Contraseña: <input type="password" name="contrasena"><br><br>
        <input type="submit" name="ingresar" value="Ingresar">
    </form>
</body>
</html>