<?php
class Client
{
    private $id_Client;
    private $last_Name;
    private $first_Name;
    private $email;
    private $phone;
    private $address;
    private $repository;

    public function __construct(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function setIdClient($id_Client)
    {
        $this->id_Client = $id_Client;
    }

    public function setLastName($last_Name)
    {
        $this->last_Name = $last_Name;
    }

    public function setFirstName($first_Name)
    {
        $this->first_Name = $first_Name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getIdClient()
    {
        return $this->id_Client;
    }

    public function getLastName()
    {
        return $this->last_Name;
    }

    public function getFirstName()
    {
        return $this->first_Name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function add() {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("INSERT INTO client (last_Name, first_Name, email, phone, address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $this->last_Name);
        $stmt->bindParam(2, $this->first_Name);
        $stmt->bindParam(3, $this->email);
        $stmt->bindParam(4, $this->phone);
        $stmt->bindParam(5, $this->address);
        $stmt->execute();
    }

    public function update()
    {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("UPDATE client SET last_Name = ?, first_Name = ?, email = ?, phone = ?, address = ? WHERE id_Client = ?");
        $stmt->bindParam(1, $this->last_Name);
        $stmt->bindParam(2, $this->first_Name);
        $stmt->bindParam(3, $this->email);
        $stmt->bindParam(4, $this->phone);
        $stmt->bindParam(5, $this->address);
        $stmt->bindParam(6, $this->id_Client);
        $stmt->execute();
    }

    public function delete()
    {
        $pdo = $this->repository->getPdo();
        $stmt = $pdo->prepare("DELETE FROM client WHERE id_Client = ?");
        $stmt->bindParam(1, $this->id_Client);
        $stmt->execute();
    }
}
<<<<<<< HEAD

?>
=======
>>>>>>> 0f44fa8333ee87583ced8cad1ccd633691175b03
