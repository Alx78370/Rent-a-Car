<?php
require_once __DIR__ . '../../Model/Repository/ReservationRepository.php';
require_once __DIR__ . '../../Model/Repository/EntityRepository.php';

class ReservationController {
    private $reservationRepo;

    public function __construct() {
        $this->reservationRepo = new ReservationRepository();
    }

    public function showReservationDetails() {
        if (isset($_POST['reservationNumber'], $_POST['emailAddress'])) {
            $reservation = $this->reservationRepo->findByReservationNumberAndEmail($_POST['reservationNumber'], $_POST['emailAddress']);
            if ($reservation) {
                require_once './Template/layout.html.php';
                require_once __DIR__ . '/../Template/reservationDetails.html.php';
            } else {
                echo "Aucune réservation trouvée";
            }
        } else {
            echo "Données du formulaire manquantes";
        }
    }
}
?>
