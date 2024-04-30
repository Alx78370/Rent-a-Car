<?php

class Availability {
    
    private int $idAvailability;
    private int $vehicleId;
    private DateTime $startingDate;
    private DateTime $endingDate;
    private string $status;
    

    // Setters avec typage strict pour les entrées et void comme type de retour

    public function setIdAvailability(int $idAvailability) : void {
        $this->idAvailability = $idAvailability;
    }    

    public function setVehicleId(int $vehicleId) : void {
        $this->vehicleId = $vehicleId;
    }    

    public function setStartingDate($startingDate) : void {
        $this->startingDate = new DateTime($startingDate);
    }

    public function setEndingDate($endingDate) : void {
        $this->endingDate = new DateTime($endingDate);
    }
    
    public function setStatus(string $status) : void {
        $this->status = $status;
    }

    // Getters avec typage strict pour les retours

    public function getIdAvailability() : int {
        return $this->idAvailability;
    }

    public function getVehicleId() : int {
        return $this->vehicleId;
    }

    public function getStartingDate() : DateTime {
        return $this->startingDate;
    }

    public function getEndingDate() : DateTime {
        return $this->endingDate;
    }

    public function getStatus() : string {
        return $this->status;
    }
}

?>

