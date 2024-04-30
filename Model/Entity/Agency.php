<?php

class Agency
{
    private int $idAgency;
    private string $agencyName;
    private string $address;
    private string $phone;

    private EntityRepository $repository;

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function setIdAgency(int $idAgency): void
    {
        $this->idAgency = $idAgency;
    }

    public function setAgencyName(string $agencyName): void
    {
        $this->agencyName = $agencyName;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getIdAgency(): int
    {
        return $this->idAgency;
    }

    public function getAgencyName(): string
    {
        return $this->agencyName;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function add(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("INSERT INTO agency (agency_Name, address, phone) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $this->agencyName);
            $stmt->bindParam(2, $this->address);
            $stmt->bindParam(3, $this->phone);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'agence : " . $e->getMessage();
        }
    }

    public function update(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("UPDATE agency SET agency_Name = ?, address = ?, phone = ? WHERE id_Agency = ?");
            $stmt->bindParam(1, $this->agencyName);
            $stmt->bindParam(2, $this->address);
            $stmt->bindParam(3, $this->phone);
            $stmt->bindParam(4, $this->idAgency);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de l'agence : " . $e->getMessage();
        }
    }

    public function delete(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("DELETE FROM agency WHERE id_Agency = ?");
            $stmt->bindParam(1, $this->idAgency);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de l'agence : " . $e->getMessage();
        }
    }
}
