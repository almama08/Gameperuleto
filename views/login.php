
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesion</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><b>Error:</b><?= $error ?></p>
    <?php endif; ?> 
  
    <form method="POST">
        Email:<br>
        <input type='email' name='email' required><br><br>

        Contraseña:<br>
        <input type="password" name="password" required minlenght="4"><br><br>
        <input type="checkbox" name="recordarme">Recordarme en este equipo<br><br>
        <button type="submit">Entrar</button>
    </form>

    <br>
    <p>¿No tienes una cuenta? <a href="index.php?accion=registrarse">Registrate aquí</a></p>
    <a href="index.php">Volver al inicio</a>
</body>
</html>