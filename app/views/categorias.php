<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT * FROM categoria";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Categorías</title>
</head>

<body>

    <h1>Listado de Categorías</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>

        <?php foreach ($categorias as $categoria): ?>

            <tr>

                <td>
                    <?= htmlspecialchars($categoria['id']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($categoria['nombre']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($categoria['descripcion']) ?>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>