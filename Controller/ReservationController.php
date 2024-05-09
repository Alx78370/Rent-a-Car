<?php
require_once __DIR__ . '../../Model/Repository/ReservationRepository.php';
require_once __DIR__ . '../../Model/Repository/EntityRepository.php';


class ReservationController
{

    private $reservationRepo;

    public function __construct()
    {

        $this->reservationRepo = new ReservationRepository();
    }


    public function handleCartReservation($cartItems)
    {
        if (!empty($cartItems)) {
            $reservationNb = uniqid('RES-');
            foreach ($cartItems as $item) {
                $data = [
                    'user_Id' => $_SESSION['userId'], // ou une autre source pour clientId
                    'vehicle_Id' => $item['vehicleId'],
                    'start_Date' => $item['startDate'],
                    'end_Date' => $item['endDate'],
                    'total_Price' => $item['totalPrice'], // Assurez-vous que ce total est calculé correctement
                    'reservation_Nb' => $reservationNb
                ];

                $this->reservationRepo->addReservation($data);
            }

            // Nettoyer le panier et définir un message de confirmation
            $_SESSION['cart'] = [];
            $_SESSION['reservationSuccess'] = "Votre commande a bien été effectuée.";
            return true;
        } else {
            $_SESSION['reservationError'] = "Votre panier est vide.";
            return false;
        }
    }
}
