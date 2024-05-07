<?php 

require_once 'EntityRepository.php';

class CartRepository extends EntityRepository
{
    public function __construct($pdo = null)
    {
        parent::__construct($pdo, 'cart');
    }

    public function getCartByClientId(int $clientId): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE client_id = :client_id");
        $statement->execute(['client_id' => $clientId]);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getCartByClientIdAndVehicleId(int $clientId, int $vehicleId): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE client_id = :client_id AND vehicle_id = :vehicle_id");
        $statement->execute(['client_id' => $clientId, 'vehicle_id' => $vehicleId]);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function addVehicleToCart(int $clientId, int $vehicleId): void
    {
        $statement = $this->pdo->prepare("INSERT INTO `{$this->table}` (client_id, vehicle_id) VALUES (:client_id, :vehicle_id)");
        $statement->execute(['client_id' => $clientId, 'vehicle_id' => $vehicleId]);
    }

    public function removeVehicleFromCart(int $clientId, int $vehicleId): void
    {
        $statement = $this->pdo->prepare("DELETE FROM `{$this->table}` WHERE client_id = :client_id AND vehicle_id = :vehicle_id");
        $statement->execute(['client_id' => $clientId, 'vehicle_id' => $vehicleId]);
    }
}