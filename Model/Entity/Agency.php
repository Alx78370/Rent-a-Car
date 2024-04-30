<?php

class Agency
{
    private int $idAgency;
    private string $agencyName;
    private string $address;
    private string $phone;

    // Setters avec typage strict pour les entrées et void comme type de retour

    public function setIdAgency(int $idAgency) : void
    {
        $this->idAgency = $idAgency;
    }

    public function setAgencyName(string $agencyName) : void
    {
        $this->agencyName = $agencyName;
    }

    public function setAddress(string $address) : void
    {
        $this->address = $address;
    }

    public function setPhone(string $phone) : void
    {
        $this->phone = $phone;
    }

    // Getters avec typage strict pour les retours

    public function getIdAgency() : int
    {
        return $this->idAgency;
    }

    public function getAgencyName() : string
    {
        return $this->agencyName;
    }

    public function getAddress() : string
    {
        return $this->address;
    }

    public function getPhone() : string
    {
        return $this->phone;
    }
}