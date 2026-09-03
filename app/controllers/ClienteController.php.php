<?php

require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    private $cliente;

    public function __construct($pdo)
    {
        $this->cliente = new Cliente($pdo);
    }

    public function index()
    {
        $clientes = $this->cliente->obtenerTodos();

        require __DIR__ . '/../views/clientes/index.php';
    }
}