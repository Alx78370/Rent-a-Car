<?php
class Availability {
    private int $idAvailability;
    private int $vehicleId;
    private DateTime $startingDate;
    private DateTime $endingDate;
    private string $status;
    

    public function getIdAvailability(): int {
        return $this->idAvailability;
    }

    public function setIdAvailability(int $idAvailability): void {
        $this->idAvailability = $idAvailability;
    }

    public function getVehicleId(): int {
        return $this->vehicleId;
    }

    public function setVehicleId(int $vehicleId): void {
        $this->vehicleId = $vehicleId;
    }

    public function getStartingDate(): DateTime {
        return $this->startingDate;
    }

    public function setStartingDate($startingDate): void {
        $this->startingDate = new DateTime($startingDate);
    }

    public function getEndingDate(): DateTime {
        return $this->endingDate;
    }

    public function setEndingDate($endingDate): void {
        $this->endingDate = new DateTime($endingDate);
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }
}

?>

