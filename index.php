<?php
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'LibroController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = 'controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            echo "Acción no encontrada.";
        }
    } else {
        echo "Controlador no encontrado.";
    }
} else {
    echo "Archivo de controlador no encontrado.";
}