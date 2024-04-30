<?php

class Vehicle
{
    private int $idVehicle;
    private string $brand;
    private string $model;
    private int $year;
    private float $dailyRate;
    private int $doorNumber;
    private string $image;
    private string $type;
    private string $gear;
    private int $passenger;
    private string $energyType;
    private int $agencyId;

    // Setters avec typage strict pour les entrées et void comme type de retour

    public function setIdVehicle(int $idVehicle) : void
    {
        $this->idVehicle = $idVehicle;
    }

    public function setBrand(string $brand) : void
    {
        $this->brand = $brand;
    }

    public function setModel(string $model) : void
    {
        $this->model = $model;
    }

    public function setYear(int $year) : void
    {
        $this->year = $year;
    }

    public function setDailyRate(float $dailyRate) : void
    {
        $this->dailyRate = $dailyRate;
    }

    public function setDoorNumber(int $doorNumber) : void
    {
        $this->doorNumber = $doorNumber;
    }

    public function setImage(string $image) : void
    {
        $this->image = $image;
    }

    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    public function setGear(string $gear) : void
    {
        $this->gear = $gear;
    }

    public function setPassenger(int $passenger) : void
    {
        $this->passenger = $passenger;
    }

    public function setEnergyType(string $energyType) : void
    {
        $this->energyType = $energyType;
    }

    public function setAgencyId(int $agencyId) : void
    {
        $this->agencyId = $agencyId;
    }

    // Getters avec typage strict pour les retours

    public function getIdVehicle() : int
    {
        return $this->idVehicle;
    }

    public function getBrand() : string
    {
        return $this->brand;
    }

    public function getModel() : string
    {
        return $this->model;
    }

    public function getYear() : int
    {
        return $this->year;
    }

    public function getDailyRate() : float
    {
        return $this->dailyRate;
    }

    public function getDoorNumber() : int
    { 
        return $this->doorNumber;
    }

    public function getImage() : string
    {
        return $this->image;
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function getGear() : string
    {
        return $this->gear;
    }

    public function getPassenger() : int
    {
        return $this->passenger;
    }

    public function getEnergyType() : string
    {
        return $this->energyType;
    }

    public function getAgencyId() : int
    {
        return $this->agencyId;
    }

}