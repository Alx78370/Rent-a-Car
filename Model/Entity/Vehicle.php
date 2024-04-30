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
    private EntityRepository $repository;

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function setIdVehicle(int $idVehicle)
    {
        $this->idVehicle = $idVehicle;
    }

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function setDailyRate(float $dailyRate)
    {
        $this->dailyRate = $dailyRate;
    }

    public function setDoorNumber(int $doorNumber)
    {
        $this->doorNumber = $doorNumber;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setGear(string $gear)
    {
        $this->gear = $gear;
    }

    public function setPassenger(int $passenger)
    {
        $this->passenger = $passenger;
    }

    public function setEnergyType(string $energyType)
    {
        $this->energyType = $energyType;
    }

    public function setAgencyId(int $agencyId)
    {
        $this->agencyId = $agencyId;
    }

    public function getIdVehicle(): int
    {
        return $this->idVehicle;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getDailyRate(): float
    {
        return $this->dailyRate;
    }

    public function getDoorNumber(): int
    {
        return $this->doorNumber;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getGear(): string
    {
        return $this->gear;
    }

    public function getPassenger(): int
    {
        return $this->passenger;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getAgencyId(): int
    {
        return $this->agencyId;
    }

    public function add()
    {
        try {
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
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du véhicule : " . $e->getMessage();
        }
    }
    public function update()
    {
        try {
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
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du véhicule : " . $e->getMessage();
        }
    }

    public function delete()
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("DELETE FROM vehicle WHERE id_Vehicle = ?");
            $stmt->bindParam(1, $this->idVehicle);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression6 du véhicule : " . $e->getMessage();
        }
    }
}
