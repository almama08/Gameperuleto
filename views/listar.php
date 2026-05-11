<!DOCTYPE html>
<html lang="es">
<head>
    <title>GamePeruleto - Listado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/peruleto.css">
</head>
<body>

    <h2>GamePeruleto</h2>

    <div class="user-bar">
        <div class="user-info">
            <?php if (isset($_SESSION['usuarioId'])): ?>
                Bienvenido, <b><?= htmlspecialchars($_SESSION['usuarioEmail']) ?></b>
            <?php endif; ?>
        </div>
        <div class="nav-links">
            <?php if (isset($_SESSION['usuarioId'])): ?>
                <a href="index.php?accion=añadir" class="btn-create">+ Crear Videojuego</a>
                <a href="index.php?accion=logout" style="margin-left: 15px;">Cerrar Sesión</a>
            <?php else: ?>
                <a href="index.php?accion=login">Iniciar Sesión</a>
                <a href="index.php?accion=registrarse" style="margin-left: 15px;">Registrarse</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Duración</th>
                    <th>Género</th>
                    <th>Info Específica</th>
                    <?php if(isset($_SESSION['usuarioId'])): ?>
                        <th>Estado</th>
                        <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $juego): ?>
                    <tr>
                        <td style="font-weight: bold; color: var(--text-white);"><?= $juego->getNombre() ?></td>
                        <td><?= $juego->getDuracion() ?>h</td>
                        <td><span class="badge-genre"><?= $juego->getGenero() ?></span></td>
                        <td style="font-size: 0.85rem; color: var(--text-gray); line-height: 1.5;">
                            <?php
                                if($juego instanceof Accion){
                                    echo "<strong style='color: white;'>Acción:</strong> " . $juego->getTipoAccion();
                                    echo "<br><strong style='color: white;'>Armas:</strong> " . $juego->getTipoArma();
                                }elseif($juego instanceof Terror){
                                    echo "<strong style='color: white;'>Terror:</strong> " . $juego->getTipoTerror();
                                    echo "<br><strong style='color: white;'>Vista:</strong> " . $juego->getTipoVista();
                                }
                            ?>
                        </td>

                        <?php if(isset($_SESSION['usuarioId'])): 
                            $esCompletado = $this->gestor->obtenerEstadoJuego($juego->getId(), $_SESSION['usuarioId']);
                        ?>
                        <td>
                            <?php if ($esCompletado): ?>
                                <span style="color: var(--neon-cyan); font-weight: bold;">✔ Completado</span>
                            <?php else: ?>
                                <span style="color: var(--text-gray);">⏳ Pendiente</span>
                            <?php endif; ?>
                            <br>
                            <a href="index.php?accion=cambiarProgreso&id=<?= $juego->getId() ?>" style="font-size: 0.7rem; text-transform: uppercase;">[Cambiar]</a>
                        </td>
                        <td>
                            <a href="index.php?accion=editar&id=<?= $juego->getId() ?>" class="link-edit">EDITAR</a>
                            <br>
                            <a href="index.php?accion=eliminar&id=<?= $juego->getId() ?>" 
                               class="link-delete" 
                               onclick="return confirm('¿Eliminar este videojuego?')">ELIMINAR</a>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>