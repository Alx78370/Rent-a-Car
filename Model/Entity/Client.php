<?php

class Client {
    
    private int $id;
    private string $last_Name;
    private string $first_Name;
    private string $email;
    private string $phone;
    private string $address;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getLast_Name() : string
    {
        return $this->last_Name;
    }

    public function setLast_Name(string $last_Name) : void
    {
        $this->last_Name = $last_Name;
    }

    public function getFirst_Name() : string
    {
        return $this->first_Name;
    }

    public function setFirst_Name(string $first_Name) : void
    {
        $this->first_Name = $first_Name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getPhone() : string
    {
        return $this->phone;
    }

    public function setPhone(string $phone) : void
    {
        $this->phone = $phone;
    }

    public function getAddress() : string
    {
        return $this->address;
    }

    public function setAddress(string $address) : void
    {
        $this->address = $address;
    }
}

?>