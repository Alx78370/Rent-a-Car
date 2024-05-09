<?php

require_once __DIR__ . '../../Model/Repository/VehicleRepository.php';

class VehicleController
{
    private $vehicleRepo;

    public function __construct()
    {
        $this->vehicleRepo = new VehicleRepository();
    }

    public function showVehicleAvailable()
    {
        $vehiclesAvailable = $this->vehicleRepo->getVehicleAvailable();
        require_once './Template/layout.html.php';
        require_once __DIR__ . '/../Template/vehicleAvailable.html.php';
    }
}