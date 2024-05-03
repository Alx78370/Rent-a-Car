<?php

require_once __DIR__ . '../../Model/Repository/AgencyRepository.php';
require_once __DIR__ . '../../Model/Repository/VehicleRepository.php';

class homeController
{
    private $agencyRepo;
    private $vehicleRepo;

    public function __construct()
    {
        $this->agencyRepo = new AgencyRepository();
        $this->vehicleRepo = new VehicleRepository(); // Ajout pour gérer les véhicules
    }

    public function showHomePage()
    {
        $agencies = $this->agencyRepo->getAll();  // Récupérer toutes les agences
        $images = $this->vehicleRepo->getAll(); // cette méthode renvoie toutes les données de véhicules
        require_once __DIR__ . '/../Template/homePage.html.php';
    }
    public function showCurrentDate()
    {
        $date = $this->getCurrentDate();  // Récupérer la date actuelle
        require_once __DIR__ . '/../Template/homePage.html.php';
    }
}
