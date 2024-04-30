<?php

class Agency
{
    private int $idAgency;
    private string $agencyName;
    private string $address;
    private string $phone;
    private EntityRepository $repository;

    // Constructeur qui initialise la référence au repository pour les interactions avec la base de données

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    // Setters avec typage strict pour les entrées et void comme type de retour

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

    // Getters avec typage strict pour les retours

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

    // Méthode pour ajouter un client dans la base de données

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

    // Méthode pour mettre à jour un client dans la base de données

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

    // Méthode pour supprimer un client de la base de données

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
