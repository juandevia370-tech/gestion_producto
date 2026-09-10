<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT * FROM proveedores";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$proveedores = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Proveedores</title>
</head>

<body>

    <h1>Listado de Proveedores</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>NIT</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>

        <?php foreach ($proveedores as $proveedor): ?>

            <tr>
                <td><?= htmlspecialchars($proveedor['id']) ?></td>
                <td><?= htmlspecialchars($proveedor['nombre']) ?></td>
                <td><?= htmlspecialchars($proveedor['nit']) ?></td>
                <td><?= htmlspecialchars($proveedor['correo']) ?></td>
                <td><?= htmlspecialchars($proveedor['telefono']) ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>