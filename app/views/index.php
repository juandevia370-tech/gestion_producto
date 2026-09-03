<?php

require_once __DIR__ . '/../../config/database.php';

/* =========================
   LISTAR PRODUCTOS
========================= */

$sql = "SELECT * FROM producto";

$consulta = $conexion->prepare($sql);
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);


/* =========================
   LISTAR CLIENTES
========================= */

$sqlClientes = "SELECT * FROM clientes";

$consultaClientes = $conexion->prepare($sqlClientes);
$consultaClientes->execute();

$clientes = $consultaClientes->fetchAll(PDO::FETCH_ASSOC);

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

            </tr>

        <?php endforeach; ?>

    </table>


    <br><br>


    <!-- =========================
         CLIENTES
    ========================= -->

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

</body>

</html>
