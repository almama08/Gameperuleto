<!DOCTYPE html>
<html>
<head>
    <title>Crear Videojuego Acción</title>
</head>
<body>
    <h1>Crear Videojuego de Acción</h1>

    <form action="index.php?accion=añadirAccion" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" placeholder="Adrenalina pura!!!"><br>

        <label>Duración (Horas):</label>
        <input type="text" name="duracion" placeholder="Horas de disfrute!!!"><br>

        <label>Tipo de Acción:</label>
        <select name="tipoAccion">
            <option value="Multijugador">Multijugador</option>
            <option value="Historia">Historia</option>
        </select><br>

        <label>Tipo de Armas:</label>
        <select name="tipoArma">
            <option value="Cuchillos">Cuchillos</option>
            <option value="Pistolas">Pistolas</option>
            <option value="Escopetas">Escopetas</option>
            <option value="Subfusiles">Subfusiles</option>
            <option value="Fusiles de asalto">Fusiles de asalto</option>
        </select><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php?accion=añadir">Volver atrás</a><br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
