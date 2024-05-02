<?php

require_once __DIR__ . '../../Model/Repository/AgencyRepository.php';

class homeController {
    private $agencyRepo;

    public function __construct() {
        $this->agencyRepo = new AgencyRepository();
    }

    public function showHomePage() {
        $agencies = $this->agencyRepo->getAll();  // Récupérer toutes les agences
        require_once __DIR__ . '/../Template/homePage.html.php';
    }

}