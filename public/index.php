<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/ProductoController.php';

$controller = new ProductoController($conexion);


