<?php

session_start();

require_once "include.php";

require_once './Controller/controllerVehicle.php';
require_once './Controller/controllerHome.php';
require_once './Controller/controllerReservation.php';
require_once './Controller/controllerClient.php';

// Définition des routes
$routes = [
    'home' => function () {
        $controller = new homeController();
        $controller->showHomePage();
    },
    'vehicleAvailable' => function () {
        // Si les données du formulaire sont bien remplies
        if (isset($_POST['start_Date']) && isset($_POST['end_Date'])) {
            $controller = new VehicleController();
            $controller->showVehicleAvailable();
        } else {
            echo '404 Page Not Found';
        }
    },
    'reservationDetails' => function ()  {
        $controller = new ReservationController();
        $controller->showReservationDetails();
        
    },
    'clientDetails' => function ()  {
        $controller = new ClientController();
        $controller->showClientDetails();
        
    },
    'insurance' => function () {
        $controller = new insuranceController();
        $controller->showInsurances();
    },
];

$page = $_GET['page'] ?? 'home';

if (array_key_exists($page, $routes)) {
    $routes[$page]();
} else {
    echo '404 Page Not Found';
}
