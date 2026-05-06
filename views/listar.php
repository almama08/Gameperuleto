<html>
    <head>
        <title>Lista de videojuegos</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Lista de Videojuegos</h2>

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
                                    echo "<br><strong>Tipo de terror:</strong> " . $juego->getTipoTerror();
                                    echo "<strong>Tipo de vista:</strong> " . $juego->getTipoVista();
                                }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>