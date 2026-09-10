<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT
            producto.id,
            producto.nombre,
            producto.precio,
            categoria.nombre AS categoria,
            proveedores.nombre AS proveedor
        FROM producto
        LEFT JOIN categoria
            ON producto.categoria_id = categoria.id
        LEFT JOIN proveedores
            ON producto.proveedor_id = proveedores.id";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
</head>

<body>

    <h1>Listado de Productos</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Proveedor</th>
        </tr>

        <?php foreach ($productos as $producto): ?>

            <tr>
                <td><?= htmlspecialchars($producto['id']) ?></td>

                <td><?= htmlspecialchars($producto['nombre']) ?></td>

                <td><?= htmlspecialchars($producto['precio']) ?></td>

                <td>
                    <?= htmlspecialchars($producto['categoria'] ?? 'Sin categoría') ?>
                </td>

                <td>
                    <?= htmlspecialchars($producto['proveedor'] ?? 'Sin proveedor') ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>