<?php

require_once "include.php";
require_once './Controller/VehicleController.php';
require_once './Controller/HomeController.php';
require_once './Controller/ReservationController.php';
require_once './Controller/LogController.php';
require_once './Controller/CartController.php';

$cartService = new CartService();

session_start();


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
        } },    
        
    'register' => function () {
        $controller = new LogController();
        $controller->register();
        $controller->showRegisterPage();
    },
    
    'insurance' => function () {
        $controller = new insuranceController();
        $controller->showInsurances();
    },

    'logDetail' => function () {
        $controller = new LogController();
        $controller->showLogDetailPage();
    },

    'login' => function () {
        $controller = new LogController();
        $controller->login();
    },
    
    'logout' => function () {
        $controller = new LogController();
        $controller->logout();
    },
    'addToCart' => function () use ($cartService) { // Utilise le $cartService créé ci-dessus
        $controller = new CartController($cartService);
        $controller->addToCart();
    },
    'cart' => function () use ($cartService) { // Ajoute cette route si elle n'existe pas déjà
        $controller = new CartController($cartService);
        $controller->showCart();
    },
];

$page = $_GET['page'] ?? 'home';

if (array_key_exists($page, $routes)) {
    $routes[$page]();
}
