<?php 

require_once 'EntityRepository.php';

class ReservationRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "reservation");
    }
}