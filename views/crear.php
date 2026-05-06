<!DOCTYPE html>
<html>
<head>
    <title>Crear Videojuego</title>
</head>
<body>
    <h1>Crear Videojuego</h1>

    <form method="POST">
        Tipo:<br>
        <select type="text" name="tipo" required>
            <option value="Acción">Acción</option>
            <option value="Terror">Terror</option>
        </select><br><br>
        Genero:<br>
        <input type="text" name="genero" required><br><br>
        Duración:<br>
        <input type="text" name="duracion" required><br><br>
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>
        Tipo de Acción:<br>
        <input type="number" name="tipoAccion" required><br><br>
        Tipo de Arma:<br>
        <select type="number" name="tipoArma" required>
            <option value=Null>-</option>
            <option value=1>Sí</option>
            <option value=0>No</option>
        </select><br><br>
        Tipo de Terror:<br>
        <   input type="number" name="tipoTerror" required><br><br>
        Tipo de Vista:<br>
        <select type="number" name="tipoVista" required>
            <option value=Null>-</option>
            <option value=1>Sí</option>
            <option value=0>No</option>
        </select><br><br>

       
        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
