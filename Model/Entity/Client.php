<?php

class Client
{
    private int $id_Client;
    private string $last_Name;
    private string $first_Name;
    private string $email;
    private string $phone;
    private string $address;
    private EntityRepository $repository;

    // Constructeur qui initialise la référence au repository pour les interactions avec la base de données

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    // Setters avec typage strict pour les entrées et void comme type de retour

    public function setIdClient(int $id_Client): void
    {
        $this->id_Client = $id_Client;
    }

    public function setLastName(string $last_Name): void
    {
        $this->last_Name = $last_Name;
    }

    public function setFirstName(string $first_Name): void
    {
        $this->first_Name = $first_Name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    // Getters avec typage strict pour les retours

    public function getIdClient(): int
    {
        return $this->id_Client;
    }

    public function getLastName(): string
    {
        return $this->last_Name;
    }

    public function getFirstName(): string
    {
        return $this->first_Name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    // Méthode pour ajouter un client dans la base de données

    public function add(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("INSERT INTO client (last_Name, first_Name, email, phone, address) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $this->last_Name);
            $stmt->bindParam(2, $this->first_Name);
            $stmt->bindParam(3, $this->email);
            $stmt->bindParam(4, $this->phone);
            $stmt->bindParam(5, $this->address);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du client : " . $e->getMessage();
        }
    }

    // Méthode pour mettre à jour un client dans la base de données

    public function update(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("UPDATE client SET last_Name = ?, first_Name = ?, email = ?, phone = ?, address = ? WHERE id_Client = ?");
            $stmt->bindParam(1, $this->last_Name);
            $stmt->bindParam(2, $this->first_Name);
            $stmt->bindParam(3, $this->email);
            $stmt->bindParam(4, $this->phone);
            $stmt->bindParam(5, $this->address);
            $stmt->bindParam(6, $this->id_Client);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du client : " . $e->getMessage();
        }
    }

    // Méthode pour supprimer un client de la base de données

    public function delete(): void
    {
        try {
            $pdo = $this->repository->getPdo();
            $stmt = $pdo->prepare("DELETE FROM client WHERE id_Client = ?");
            $stmt->bindParam(1, $this->id_Client);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression du client : " . $e->getMessage();
        }
    }
}
?>
