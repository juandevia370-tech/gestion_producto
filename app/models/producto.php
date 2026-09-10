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

   

    // Actualizar producto
   }
   