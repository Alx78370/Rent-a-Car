<?php

class Vehicle
{
    private $idVehicle;
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
    private $repository;

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function setIdVehicle($idVehicle)
    {
        $this->idVehicle = $idVehicle;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setDailyRate($dailyRate)
    {
        $this->dailyRate = $dailyRate;
    }

    public function setDoorNumber($doorNumber)
    {
        $this->doorNumber = $doorNumber;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setGear($gear)
    {
        $this->gear = $gear;
    }

    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;
    }

    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
    }

    public function getId()
    {
        return $this->idVehicle;
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

    public function add()
    {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("INSERT INTO vehicle (brand, model, year, daily_Rate, door_nb, image, type, gear, passenger, energy_type, agency_Id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $this->brand);
        $stmt->bindParam(2, $this->model);
        $stmt->bindParam(3, $this->year);
        $stmt->bindParam(4, $this->dailyRate);
        $stmt->bindParam(5, $this->doorNumber);
        $stmt->bindParam(6, $this->image);
        $stmt->bindParam(7, $this->type);
        $stmt->bindParam(8, $this->gear);
        $stmt->bindParam(9, $this->passenger);
        $stmt->bindParam(10, $this->energyType);
        $stmt->bindParam(11, $this->agencyId);
        $stmt->execute();
    }

    public function update()
    {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("UPDATE vehicle SET brand = ?, model = ?, year = ?, daily_Rate = ?, door_nb = ?, image = ?, type = ?, gear = ?, passenger = ?, energy_type = ?, agency_Id = ? WHERE id_Vehicle = ?");
        $stmt->bindParam(1, $this->brand);
        $stmt->bindParam(2, $this->model);
        $stmt->bindParam(3, $this->year);
        $stmt->bindParam(4, $this->dailyRate);
        $stmt->bindParam(5, $this->doorNumber);
        $stmt->bindParam(6, $this->image);
        $stmt->bindParam(7, $this->type);
        $stmt->bindParam(8, $this->gear);
        $stmt->bindParam(9, $this->passenger);
        $stmt->bindParam(10, $this->energyType);
        $stmt->bindParam(11, $this->agencyId);
        $stmt->bindParam(12, $this->idVehicle);
        $stmt->execute();
    }

    public function delete()
    {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("DELETE FROM vehicle WHERE id_Vehicle = ?");
        $stmt->bindParam(1, $this->idVehicle);
        $stmt->execute();
    }
}
