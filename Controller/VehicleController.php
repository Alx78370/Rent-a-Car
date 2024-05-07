<?php

require_once __DIR__ . '../../Model/Repository/VehicleRepository.php';

class VehicleController
{
    private $vehicleRepo;

    public function __construct()
    {
        $this->vehicleRepo = new VehicleRepository();
    }

    // Affichage de la page des véhicules avec des véhicules chargés

    public function showVehicleAvailable()
    {
        $vehiclesAvailable = $this->vehicleRepo->getVehicleAvailable();  // Récupérer tous les véhicules disponib
        require_once './Template/layout.html.php';
        require_once __DIR__ . '/../Template/vehicleAvailable.html.php';
    }
}
