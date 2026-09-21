<?php
class Libro {
    private $conn;
    private $table_name = "libros";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerTodos() {
        $query = "SELECT l.*, c.nombre as categoria_nombre, p.empresa as proveedor_nombre 
                  FROM " . $this->table_name . " l
                  LEFT JOIN categorias c ON l.categoria_id = c.id
                  LEFT JOIN proveedores p ON l.proveedor_id = p.id
                  ORDER BY l.id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}