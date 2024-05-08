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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vehicleId = $_POST['vehicleId'];
            $vehicle = $this->vehicleRepository->findVehicleById($vehicleId);
            $cart = $this->cartRepository->getCart();
            $cart->addVehicle($vehicle);
            $this->cartRepository->saveCart($cart);
            header('Location: index.php?page=cart');
            exit;
        }
    }
    
    public function removeVehicleFromCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $vehicleId = $_POST['vehicleId'];
            $vehicle = $this->vehicleRepository->findVehicleById($vehicleId);
            $cart = $this->cartRepository->getCart();
            $cart->removeVehicle($vehicle);
            $this->cartRepository->saveCart($cart);
            header('Location: index.php?page=cart');
            exit;
        }
    }
    
    
}