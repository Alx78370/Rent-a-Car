<?php

class Client
{
    private int $id_Client;
    private string $last_Name;
    private string $first_Name;
    private string $email;
    private string $phone;
    private string $address;

    // Setters avec typage strict pour les entrées et void comme type de retour

    public function setIdClient(int $id_Client) : void
    {
        $this->id_Client = $id_Client;
    }

    public function setLastName(string $last_Name) : void
    {
        $this->last_Name = $last_Name;
    }

    public function setFirstName(string $first_Name) : void
    {
        $this->first_Name = $first_Name;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone) : void
    {
        $this->phone = $phone;
    }

    public function setAddress(string $address) : void
    {
        $this->address = $address;
    }

    // Getters avec typage strict pour les retours

    public function getIdClient() : int
    {
        return $this->id_Client;
    }

    public function getLastName() : string
    {
        return $this->last_Name;
    }

    public function getFirstName() : string
    {
        return $this->first_Name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPhone() : string
    {
        return $this->phone;
    }

    public function getAddress() : string
    {
        return $this->address;
    }

}