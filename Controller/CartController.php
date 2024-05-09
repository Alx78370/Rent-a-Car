<?php

require_once __DIR__ . '../../Service/CartService.php';

class CartController {
    private $cartService;

    public function __construct($cartService) {
        $this->cartService = $cartService;
    }

    public function addToCart() {
        $vehicleId = $_POST['vehicle_id'];
        $dailyRate = $_POST['daily_rate'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $image = $_POST['image'];
        $startDate = $_SESSION['date_info']['start_date']; // $_POST['start_Date'
        $endDate = $_SESSION['date_info']['end_date'];
        $this->cartService->addVehicleToCart($vehicleId, $dailyRate, $brand, $model, $image, $startDate, $endDate);
        header("Location: index.php?page=cart");
        exit;
    }
    
    public function showCart() {
 
        require_once './Template/layout.html.php';
        require_once __DIR__ . '/../Template/cart.html.php';
    }
    public function removeFromCart($vehicleId) {
        if (isset($_SESSION['cart'][$vehicleId])) {
            unset($_SESSION['cart'][$vehicleId]);
        }
    }
    public function showReservationDate() {
        $reservationDate = $this->cartService->getReservationDate();
        require_once __DIR__ . '/../Template/cart.html.php';
        return $reservationDate;
    }
}