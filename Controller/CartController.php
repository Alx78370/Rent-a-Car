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
        $startDate = $_SESSION['date_info']['start_date'];
        $endDate = $_SESSION['date_info']['end_date'];
        $agencyStart = $_SESSION['agency_info']['start_agency'];
        $agencyEnd = $_SESSION['agency_info']['end_agency'];
        //var_dump($_POST);
        //var_dump($_SESSION);

        $this->cartService->addVehicleToCart($vehicleId, $dailyRate, $brand, $model, $image, $startDate, $endDate, $agencyStart, $agencyEnd);
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
    public function showReservationAgency() {
        $reservationAgency = $this->cartService->getReservationAgency();
        require_once __DIR__ . '/../Template/cart.html.php';
        return $reservationAgency;
    }

    public function showReservationDate() {
        $reservationDate = $this->cartService->getReservationDate();
        require_once __DIR__ . '/../Template/cart.html.php';
        return $reservationDate;
    }
}