<?php
class Availability extends EntityRepository {
    private int $idAvailability;
    private int $vehicleId;
    private DateTime $startingDate;
    private DateTime $endingDate;
    private string $status;

    // Constructor with typing
    public function __construct(int $idAvailability, int $vehicleId, $startingDate, $endingDate, string $status) {
        $this->idAvailability = $idAvailability;
        $this->vehicleId = $vehicleId;
        $this->startingDate = new DateTime($startingDate);
        $this->endingDate = new DateTime($endingDate);
        $this->status = $status;
    }

    // Getters with return typing
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
}

?>