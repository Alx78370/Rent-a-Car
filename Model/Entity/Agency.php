<?php
class Agency {
    private int $id;
    private string $nomAgence;
    private string $adresse;
    private string $telephone;
    private EntityRepository $repository;

    public function __construct(EntityRepository $repository) {
        $this->repository = $repository;
    }

    // Setters with type declarations
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNomAgence(string $nomAgence): void {
        $this->nomAgence = $nomAgence;
    }

    public function setAdresse(string $adresse): void {
        $this->adresse = $adresse;
    }

    public function setTelephone(string $telephone): void {
        $this->telephone = $telephone;
    }

    // Getters with return type declarations
    public function getId(): int {
        return $this->id;
    }

    public function getNomAgence(): string {
        return $this->nomAgence;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }

    public function getTelephone(): string {
        return $this->telephone;
    }

    // Database operations
    public function add(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("INSERT INTO agency (nomAgence, adresse, telephone) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $this->nomAgence);
        $stmt->bindParam(2, $this->adresse);
        $stmt->bindParam(3, $this->telephone);
        $stmt->execute();
    }

    public function update(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("UPDATE agency SET nomAgence = ?, adresse = ?, telephone = ? WHERE id = ?");
        $stmt->bindParam(1, $this->nomAgence);
        $stmt->bindParam(2, $this->adresse);
        $stmt->bindParam(3, $this->telephone);
        $stmt->bindParam(4, $this->id);
        $stmt->execute();
    }

    public function delete(): void {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("DELETE FROM agency WHERE id = ?");
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
    }
}
?>
