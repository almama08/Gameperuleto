<!DOCTYPE html>
<html>
<head>
    <title>Crear Videojuego Terror</title>
    <link rel="stylesheet" href="css/peruleto.css">
</head>
<body>
    <h1>Crear Videojuego de Terror</h1>

    <form action="index.php?accion=añadirTerror" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Sustos a tope!!!"><br>

        <label>Duración (Horas):</label>
        <input type="text" name="duracion" placeholder="Horas de sufrimiento!!!"><br>

        <label>Tipo de Terror:</label>
        <select name="tipoTerror">
            <option value="Psicológico">Psicológico</option>
            <option value="Survival Horror">Survival Horror</option>
            <option value="Jumpscares">Jumpscares</option>
        </select><br>

        <label>Tipo de Vista:</label>
        <select name="tipoVista">
            <option value="Primera Persona">1ª Persona</option>
            <option value="Tercera Persona">3ª Persona</option>
            <option value="Cámara Fija">Cámara Fija</option>
        </select><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php?accion=añadir">Volver atrás</a><br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
