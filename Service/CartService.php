<?php
class CartService {
    private $vehicleRepository;
    private $agencyRepository;
    private $reservationRepository;
    private $userRepository;
    
    public function __construct() {
        $this->vehicleRepository = new VehicleRepository();
        $this->agencyRepository = new AgencyRepository();
        $this->reservationRepository = new ReservationRepository();
        $this->userRepository = new UserRepository();
    }
    
    public function addVehicleToCart() {
        $vehicleId = $_POST['vehicle_id'];
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?page=home');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($vehicleId)) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (!in_array($vehicleId, $_SESSION['cart'])) {
                $_SESSION['cart'][] = $vehicleId;
            }
            header('Location: index.php?page=vehicleAvailable');
        }
    }
    
    public function removeVehicleFromCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vehicleId = $_POST['vehicle_id'];
            $vehicle = $this->vehicleRepository->findVehicleById($vehicleId);
            $cart = $this->cartRepository->getCart();
            $cart->removeVehicle($vehicle);
            $this->cartRepository->saveCart($cart);
            header('Location: index.php?page=cart');
            exit;
        }
    }
    
    
}