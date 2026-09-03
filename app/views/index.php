<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
</head>

<body>

    <h1>Gestión de Productos</h1>

    <a href="index.php?accion=crear">
        <button>Nuevo Producto</button>
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Acciones</th>
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
                    $<?php echo $producto['precio']; ?>
                </td>

                <td>
                    <?php echo $producto['categoria']; ?>
                </td>

                <td>

                </td>

            </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>