<?php

require_once __DIR__ . '../../Model/Repository/insuranceRepository.php';

class insuranceController {
    private $insuranceRepo;

    public function __construct() {
        $this->insuranceRepo = new InsuranceRepository();
    }

    public function showInsurances() {
        $Insurances = $this->insuranceRepo->getAll();  // Récupérer toutes les assurances
        require_once __DIR__ . '/../Template/insurance.html.php';
    }

}