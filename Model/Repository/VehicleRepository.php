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
        $statement = $this->pdo->prepare("SELECT * FROM vehicle LEFT JOIN reservation ON reservation.vehicle_Id = vehicle.id WHERE  availability = 1 AND reservation.client_Id IS NULL");
        $statement->bindParam(":start_Date", $_POST['start_Date'], PDO::PARAM_STR);
        $statement->bindParam(":end_Date", $_POST['end_Date'], PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
