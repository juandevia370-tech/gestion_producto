<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT * FROM producto LIMIT 1";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);



$sqlClientes = "SELECT * FROM clientes";

$consultaClientes = $conexion->prepare($sqlClientes);
$consultaClientes->execute();

$clientes = $consultaClientes->fetchAll(PDO::FETCH_ASSOC);


$sqlProveedores = "SELECT * FROM proveedores";

$consultaProveedores = $conexion->prepare($sqlProveedores);
$consultaProveedores->execute();

$proveedores = $consultaProveedores->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT 
            producto.id,
            producto.nombre,
            producto.precio,
            producto.categoria,
            proveedores.nombre AS proveedor
        FROM producto
        LEFT JOIN proveedores
        ON producto.proveedor_id = proveedores.id
        LIMIT 1";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">




    <title>Gestión de Productos y Clientes</title>

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

                <td>
                    <?= htmlspecialchars($producto['id']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($producto['nombre']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($producto['precio']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($producto['categoria']) ?>
                </td>
                <td>
                    <?= htmlspecialchars($producto['proveedor']) ?>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>


    <br><br>

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

                <td>
                    <?= htmlspecialchars($cliente['id']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($cliente['nombre']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($cliente['documento']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($cliente['correo']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($cliente['telefono']) ?>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

    <title>Proveedores</title>

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