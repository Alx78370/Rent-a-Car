<?php 

require_once "include.php";

require_once './Controller/controllerVehicle.php';
require_once './Controller/controllerHome.php';

// Définition des routes
$routes = [
    'vehicleAvailable' => function() {
        $controller = new VehicleController();
        $controller->showVehicles();
    },
    'home' => function() {
        $controller = new homeController();
        $controller->showHomePage();
    }
];

$page = $_GET['page'] ?? 'home';

if (array_key_exists($page, $routes)) {
    $routes[$page]();
} else {
    echo '404 Page Not Found';
}
