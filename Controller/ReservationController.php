<?php
require_once __DIR__ . '../../Model/Repository/ReservationRepository.php';
require_once __DIR__ . '../../Model/Repository/EntityRepository.php';


class ReservationController {

    private $reservationRepo;

    public function __construct() {
        
        $this->reservationRepo = new ReservationRepository(); 
     }    
}
