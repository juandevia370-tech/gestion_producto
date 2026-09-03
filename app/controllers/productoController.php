<?php

require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    private $producto;

    public function __construct($conexion)
    {
        $this->producto = new Producto($conexion);
    }

    // Listar productos
public function index()
{
    $productos = $this->producto->obtenerTodos();

    require __DIR__ . '/../views/productos/index.php';
}
    // Mostrar formulario para crear
    public function crear()
    {
        require __DIR__ . '/../views/productos/crear.php';
    }

    // Guardar producto
    public function guardar()
    {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        $this->producto->crear(
            $nombre,
            $precio,
            $categoria
        );

        header('Location: index.php');
        exit;
    }

    // Mostrar formulario de edición
    public function editar($id)
    {
        $producto = $this->producto->obtenerPorId($id);

        require __DIR__ . '/../views/productos/editar.php';
    }

    // Actualizar producto
    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];

        $this->producto->actualizar(
            $id,
            $nombre,
            $precio,
            $categoria
        );

        header('Location: index.php');
        exit;
    }

    // Eliminar producto
    public function eliminar($id)
    {
        $this->producto->eliminar($id);

        header('Location: index.php');
        exit;
    }
}