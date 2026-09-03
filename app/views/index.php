<?php

require_once __DIR__ . '/../../config/database.php';

$sql = "SELECT * FROM producto";

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

    <h1>Gestión de Productos</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoria</th>
        </tr>

        <?php foreach ($productos as $producto): ?>

            <tr>

                <td>
                    <?php echo $producto['id']; ?>
                </td>

                <td>
                    <?php echo $producto['nombre']; ?>
                </td>

                <td>
                    <?php echo $producto['precio']; ?>
                </td>

                <td>
                    <?php echo $producto['categoria']; ?>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>