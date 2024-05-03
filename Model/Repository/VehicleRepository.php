<?php

require_once 'EntityRepository.php';

class VehicleRepository extends EntityRepository
{
    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "vehicle");
    }

    public function getVehicleAvailable()
    {
        $statement = $this->pdo->prepare("SELECT * FROM availability LEFT JOIN vehicle ON vehicle.id = availability.vehicle_Id LEFT JOIN reservation ON reservation.vehicle_Id = vehicle.id WHERE (availability_Date BETWEEN :start_Date AND :end_Date) AND reservation.client_Id IS NULL");
        $statement->bindParam(":start_Date", $_POST['start_Date'], PDO::PARAM_STR);
        $statement->bindParam(":end_Date", $_POST['end_Date'], PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function getCurrentDate(): string
    {
        $date = new DateTime();
        return $date->format('Y-m-d');
    }
}
