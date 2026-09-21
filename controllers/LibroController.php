<?php
require_once 'config/database.php';
require_once 'models/Libro.php';

class LibroController {
    public function index() {
        $database = new Database();
        $db = $database->getConnection();

        $libro = new Libro($db);
        $result = $libro->obtenerTodos();
        $libros = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once 'views/libros/index.php';
    }
}