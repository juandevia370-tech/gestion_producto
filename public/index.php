<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/ProductoController.php';
require_once __DIR__ . '/../app/controllers/ProveedorController.php';

$controller = new ProductoController($conexion);
$controller = new ProveedorController($conexion);   


