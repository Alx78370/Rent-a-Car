<?php

require_once __DIR__ . '../../Service/CartService.php';

class CartController {
    private $vehicleRepo;

    public function __construct() {
        $this->vehicleRepo = new VehicleRepository();
    }

    public function addToCart() {
        $this->vehicleRepo->addVehicleToCart();
    }

    public function showCart() {
        $cart = $this->vehicleRepo->getAll();  // Récupérer toutes les agences
        require_once __DIR__ . '/../Template/cart.html.php';
    }

}