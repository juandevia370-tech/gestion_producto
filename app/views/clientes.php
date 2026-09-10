<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT * FROM clientes";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$clientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
</head>

<body>

    <h1>Listado de Clientes</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>

        <?php foreach ($clientes as $cliente): ?>

            <tr>
                <td><?= htmlspecialchars($cliente['id']) ?></td>
                <td><?= htmlspecialchars($cliente['nombre']) ?></td>
                <td><?= htmlspecialchars($cliente['documento']) ?></td>
                <td><?= htmlspecialchars($cliente['correo']) ?></td>
                <td><?= htmlspecialchars($cliente['telefono']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>