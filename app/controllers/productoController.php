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

}