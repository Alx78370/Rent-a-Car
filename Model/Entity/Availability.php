<?php
class Availability {
    private int $idAvailability;
    private int $vehicleId;
    private DateTime $startingDate;
    private DateTime $endingDate;
    private string $status;
    private EntityRepository $repository;

    public function __construct(EntityRepository $repository, int $idAvailability, int $vehicleId, $startingDate, $endingDate, string $status) {
        $this->repository = $repository;
        $this->idAvailability = $idAvailability;
        $this->vehicleId = $vehicleId;
        $this->startingDate = new DateTime($startingDate);
        $this->endingDate = new DateTime($endingDate);
        $this->status = $status;
    }

    public function getIdAvailability(): int {
        return $this->idAvailability;
    }

    public function getVehicleId(): int {
        return $this->vehicleId;
    }

    public function getStartingDate(): DateTime {
        return $this->startingDate;
    }

    public function getEndingDate(): DateTime {
        return $this->endingDate;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function add(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("INSERT INTO availability (vehicleId, startingDate, endingDate, status) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $this->vehicleId);
        $stmt->bindParam(2, $this->startingDate->format('Y-m-d H:i:s'));
        $stmt->bindParam(3, $this->endingDate->format('Y-m-d H:i:s'));
        $stmt->bindParam(4, $this->status);
        $stmt->execute();
    }

    public function update(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("UPDATE availability SET vehicleId = ?, startingDate = ?, endingDate = ?, status = ? WHERE idAvailability = ?");
        $stmt->bindParam(1, $this->vehicleId);
        $stmt->bindParam(2, $this->startingDate->format('Y-m-d H:i:s'));
        $stmt->bindParam(3, $this->endingDate->format('Y-m-d H:i:s'));
        $stmt->bindParam(4, $this->status);
        $stmt->bindParam(5, $this->idAvailability);
        $stmt->execute();
    }

    public function delete(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("DELETE FROM availability WHERE idAvailability = ?");
        $stmt->bindParam(1, $this->idAvailability);
        $stmt->execute();
    }
}
?>

