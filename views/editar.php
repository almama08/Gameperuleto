<!DOCTYPE html>
<html>
<head>
    <title>Editar Juego</title>
    <link rel="stylesheet" href="css/peruleto.css">
</head>
<body>
    <h1>Editar Juego</h1>

    <form action="index.php?accion=editar" method="POST">
        <input type="hidden" name="id" value="<?= $juego->getId(); ?>">
        <input type="hidden" name="genero" value="<?= $juego->getGenero(); ?>">

        Duración (Horas):<br>
        <input type="text" name="duracion" value="<?= $juego->getDuracion() ?>" required><br><br>

        Nombre:<br>
        <input type="text" name="nombre" value="<?= $juego->getNombre() ?>" required><br><br>


        <?php if ($juego instanceof Accion): ?>
            Tipo de Acción:<br>
            <select name="tipoAccion">
                <option value="Multijugador" <?= ($juego->getTipoAccion() == "Multijugador") ? "selected" : "" ?>>Multijugador</option>
                <option value="Historia" <?= ($juego->gettipoAccion() == "Historia") ? "selected" : "" ?>>Historia</option>
            </select><br><br>

            Tipo de Arma:<br>
            <select name="tipoArma">
                <option value="Cuchillos" <?= ($juego->getTipoArma() == "Cuchillos") ? "selected" : "" ?>>Cuchillos</option>
                <option value="Pistolas" <?= ($juego->getTipoArma() == "Pistolas") ? "selected" : "" ?>>Pistolas</option>
                <option value="Escopetas" <?= ($juego->getTipoArma() == "Escopetas") ? "selected" : "" ?>>Escopetas</option>
                <option value="Subfusiles" <?= ($juego->getTipoArma() == "Subfusiles") ? "selected" : "" ?>>Subfusiles</option>
                <option value="Fusiles de asalto" <?= ($juego->getTipoArma() == "Fusiles de asalto") ? "selected" : "" ?>>Fusiles de asalto</option>
                </select><br><br>
        <?php endif; ?>

        <?php if ($juego instanceof Terror): ?>
            Tipo de Terror:<br>
            <select name="tipoTerror">
                <option value="Psicológico" <?= ($juego->getTipoTerror() == "Psicológico") ? "selected" : "" ?>>Psicológico</option>
                <option value="Survival Horror" <?= ($juego->getTipoTerror() == "Survival Horror") ? "selected" : "" ?>>Survival Horror</option>
                <option value="Jumpscares" <?= ($juego->getTipoTerror() == "Jumpscares") ? "selected" : "" ?>>Jumpscares</option>
            </select><br><br>

            Tipo de Vista:<br>
            <select name="tipoVista">
                <option value="Primera Persona" <?= ($juego->getTipoVista() == "Primera Persona") ? "selected" : "" ?>>1ª Persona</option>
                <option value="Tercera Persona" <?= ($juego->getTipoVista() == "Tercera Persona") ? "selected" : "" ?>>3ª Persona</option>
                <option value="Cámara Fija" <?= ($juego->getTipoVista() == "Cámara Fija") ? "selected" : "" ?>>Cámara Fija</option>
            </select><br><br>
        <?php endif; ?>

        <button type="submit">Actualizar Juego</button>
    </form>

    <br>
    <a href="index.php">Volver al listado</a>
</body>
</html>