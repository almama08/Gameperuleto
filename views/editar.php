<!DOCTYPE html>
<html>
<head>
    <title>Editar Juego</title>
</head>
<body>
    <h1>Editar Juego</h1>

    <form method="POST">
        Género:<br>
        <input type="text" name="genero" value="<?= $juego->getGenero() ?>" required><br><br>

        Duración:<br>
        <input type="text" name="duracion" value="<?= $juego->getDuracion() ?>" required><br><br>

        Nombre:<br>
        <input type="text" name="nombre" value="<?= $juego->getNombre() ?>" required><br><br>


        <?php if ($juego instanceof Accion): ?>
            Tipo de Acción:<br>
            <input type="number" name="tipoAccion" value="<?= $juego->getTipoAccion() ?>" required><br><br>

            Tipo de Arma:<br>
            <input type="text" name="tipoArma" value="<?= $juego->getTipoArma() ?>" required><br><br>
        <?php endif; ?>

        <?php if ($juego instanceof Terror): ?>
            Tipo de Terror:<br>
            <input type="number" name="tipoTerror" value="<?= $juego->getTipoTerror() ?>" required><br><br>

            Tipo de Vista:<br>
            <select name="tipoVista" required>
                <option value="0" <?= ($juego->getTipoVista() == 0) ? 'selected' : '' ?>>No</option>
                <option value="1" <?= ($juego->getTipoVista() == 1) ? 'selected' : '' ?>>Sí</option>
            </select><br><br>
        <?php endif; ?>

        <button type="submit">Actualizar Juego</button>
    </form>

    <br>
    <a href="index.php">Volver al listado</a>
</body>
</html>