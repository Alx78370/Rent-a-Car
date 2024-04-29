<?php
class Agency extends EntityRepository{
    private int $id;
    private string $nomAgence;
    private string $adresse;
    private string $telephone;

    // Constructor with typing
    public function __construct(int $id, string $nomAgence, string $adresse, string $telephone) {
        $this->id = $id;
        $this->nomAgence = $nomAgence;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }

    // Getters with typing return
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
}

?>
