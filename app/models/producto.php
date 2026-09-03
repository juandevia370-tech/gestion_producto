<?php

class Producto
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    // Mostrar todos los productos
    public function obtenerTodos()
    {
        $sql = "SELECT * FROM productos ORDER BY id DESC";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    // Buscar un producto por ID
    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM productos WHERE id = ?";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([$id]);

        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    // Crear producto
    public function crear($nombre, $precio, $categoria)
    {
        $sql = "INSERT INTO productos
                (nombre, precio, categoria)
                VALUES (?, ?, ?)";

        $consulta = $this->conexion->prepare($sql);

        return $consulta->execute([
            $nombre,
            $precio,
            $categoria
        ]);
    }

    // Actualizar producto
    public function actualizar($id, $nombre, $precio, $categoria)
    {
        $sql = "UPDATE productos
                SET nombre = ?, precio = ?, categoria = ?
                WHERE id = ?";

        $consulta = $this->conexion->prepare($sql);

        return $consulta->execute([
            $nombre,
            $precio,
            $categoria,
            $id
        ]);
    }

    // Eliminar producto
    public function eliminar($id)
    {
        $sql = "DELETE FROM productos WHERE id = ?";

        $consulta = $this->conexion->prepare($sql);

        return $consulta->execute([$id]);
    }
}