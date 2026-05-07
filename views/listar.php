<html>
    <head>
        <title>GamePeruleto</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>GamePeruleto</h2>

        <a href="index.php?accion=añadir">Crear videojuego</a>

        <table>
            <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Duración (Horas)</th>
                        <th>Género</th>
                        <th>Info específica</th>
                        <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $juego): ?>
                    <tr>
                        <td><?= $juego->getNombre() ?></td>
                        <td><?= $juego->getDuracion() ?></td>
                        <td><?= $juego->getGenero() ?></td>
                        <td>
                            <?php
                                if($juego instanceof Accion){
                                    echo "<strong>Tipo de acción:</strong> " . $juego->getTipoAccion();
                                    echo "<br><strong>Tipo de armas:</strong> " . $juego->getTipoArma();
                                }elseif($juego instanceof Terror){
                                    echo "<strong>Tipo de terror:</strong> " . $juego->getTipoTerror();
                                    echo "<br><strong>Tipo de vista:</strong> " . $juego->getTipoVista();
                                }
                            ?>
                        </td>
                        <td>
                            <a href="index.php?accion=editar&id=<?= $juego->getId() ?>">Editar</a><br>
                            <a href="index.php?accion=eliminar&id=<?= $juego->getId() ?>" onclick="return confirm('Eliminar este videojuego?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>