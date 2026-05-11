<!DOCTYPE html>
<html>
<head>

    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/peruleto.css">
</head>
<body>
    <h1>Crear nueva Cuenta</h1>

    <form method="POST">
        Email:<br>
        <input type='email' name='email' required><br><br>


        Contraseña:<br>
        <input type="password" name="password" required minlenght="4"><br><br>

        <button type="submit">Registrarse</button>
    </form>

    <br>
    <p>¿Ya tienes una cuenta? <a href="index.php?accion=login">Inicia sesión aquí</a></p>
    <a href="index.php">Volver al inicio</a>
</body>
</html>