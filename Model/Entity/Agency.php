<?php
class Agence extends EntityRepository {
    private $id;
    private $nomAgence;
    private $adresse;
    private $telephone;

    // Constructeur
    public function __construct($id, $nomAgence, $adresse, $telephone) {
        $this->id = $id;
        $this->nomAgence = $nomAgence;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }

    // Getters et setters
    public function getId() {
        return $this->id;
    }

    public function getNomAgence() {
        return $this->nomAgence;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getTelephone() {
        return $this->telephone;
    }
}
?>
