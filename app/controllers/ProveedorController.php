<?php

require_once __DIR__ . '/../models/Proveedor.php';

class ProveedorController
{
    private $proveedor;

    public function __construct($conexion)
    {
        $this->proveedor = new Proveedor($conexion);
    }

    public function index()
    {
        $proveedores = $this->proveedor->obtenerTodos();

        require __DIR__ . '/../views/proveedores/index.php';
    }
}