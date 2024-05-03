<?php

require_once __DIR__ . '../../Model/Repository/AgencyRepository.php';
require_once __DIR__ . '../../Model/Repository/EntityRepository.php';

class homeController
{
    private $agencyRepo;

    public function __construct()
    {
        $this->agencyRepo = new AgencyRepository();
    }

    public function showHomePage()
    {
        $agencies = $this->agencyRepo->getAll();  // Récupérer toutes les agences
        require_once __DIR__ . '/../Template/homePage.html.php';
    }
    public function showCurrentDate()
    {
        $date = $this->getCurrentDate();  // Récupérer la date actuelle
        require_once __DIR__ . '/../Template/homePage.html.php';
    }
}
