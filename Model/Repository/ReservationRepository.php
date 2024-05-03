<?php

require_once 'EntityRepository.php';

class ReservationRepository extends EntityRepository
{

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "reservation");
    }
    public function findByReservationNumberAndEmail($reservationNumber, $email) {
        $stmt = $this->pdo->prepare("SELECT reservations.*, clients.first_Name, clients.last_Name FROM `reservation` AS reservations JOIN `client` AS clients ON reservations.client_Id = clients.id WHERE reservations.reservation_Nb = :reservationNumber AND clients.email = :email");
        $stmt->bindParam(':reservationNumber', $reservationNumber);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
