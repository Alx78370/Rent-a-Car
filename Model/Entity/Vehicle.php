<?php

class Vehicle extends EntityRepository
{
    private $id;
    private $brand;
    private $model;
    private $year;
    private $dailyRate;
    private $doorNumber;
    private $image;
    private $type;
    private $gear;
    private $passenger;
    private $energyType;
    private $agencyId;

    // Constructor
    public function __construct($id, $brand, $model, $year, $dailyRate, $doorNumber, $image, $type, $gear, $passenger, $energyType, $agencyId)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->dailyRate = $dailyRate;
        $this->doorNumber = $doorNumber;
        $this->image = $image;
        $this->type = $type;
        $this->gear = $gear;
        $this->passenger = $passenger;
        $this->energyType = $energyType;
        $this->agencyId = $agencyId;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDailyRate()
    {
        return $this->dailyRate;
    }

    public function getDoorNumber()
    {
        return $this->doorNumber;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getGear()
    {
        return $this->gear;
    }

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function getEnergyType()
    {
        return $this->energyType;
    }

    public function getAgencyId()
    {
        return $this->agencyId;
    }
}
