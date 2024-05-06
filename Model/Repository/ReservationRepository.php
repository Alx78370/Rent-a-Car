<?php

require_once 'EntityRepository.php';

class ReservationRepository extends EntityRepository
{

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "reservation");
    }
    public function findByReservationNumberAndEmail($reservationNumber, $email) {
        $stmt = $this->pdo->prepare("
        SELECT reservations.*,
               clients.first_Name, clients.last_Name,
               vehicles.brand AS vehicle_brand,
               vehicles.model AS vehicle_model,
               vehicles.type AS vehicle_type,
               vehicles.energy_type AS vehicle_energy_type,
               vehicles.image AS vehicle_image,
               agencies.name AS agency_name,
               agencies.address AS agency_address,
               agencies.phone AS agency_phone
        FROM reservation AS reservations
        JOIN client AS clients ON reservations.client_Id = clients.id
        JOIN vehicle AS vehicles ON reservations.vehicle_Id = vehicles.id
        JOIN agency AS agencies ON vehicles.agency_Id = agencies.id
        WHERE reservations.reservation_Nb = :reservationNumber AND clients.email = :email
    ");
        $stmt->bindParam(':reservationNumber', $reservationNumber);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
