<?php
require_once '../app/init.php';

// Obtén el controlador y el método desde la URL
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$methodName = isset($_GET['method']) ? $_GET['method'] : 'index';

// Carga el controlador
$controllerFile = '../app/controllers/' . ucfirst($controllerName) . 'Controller.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controllerName) . 'Controller';
    $controller = new $controllerClass();

    // Llama al método correspondiente
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Método no encontrado.";
    }
} else {
    echo "Controlador no encontrado.";
}
