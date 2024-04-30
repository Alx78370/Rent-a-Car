<?php

class Reservation {
    private int $id;
    private int $client_Id;
    private int $vehicle_Id;
    private DateTime $start_Date;
    private DateTime $end_Date;
    private float $total_Price;
    private string $status;       


    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getClient_Id() : int
    {
        return $this->client_Id;
    }

    public function setClient_Id(int $client_Id) : void
    {
        $this->client_Id = $client_Id;
    }

    public function getVehicle_Id() : int
    {
        return $this->vehicle_Id;
    }

    public function setVehicle_Id(int $vehicle_Id) : void
    {
        $this->vehicle_Id = $vehicle_Id;
    }

    public function getStart_Date() : DateTime
    {
        return $this->start_Date;
    }

    public function setStart_Date(DateTime $start_Date) : void
    {
        $this->start_Date = $start_Date;
    }

    public function getEnd_Date() : DateTime
    {
        return $this->end_Date;
    }

    public function setEnd_Date(DateTime $end_Date) : void
    {
        $this->end_Date = $end_Date;
    }

    public function getTotal_Price() : float
    {
        return $this->total_Price;
    }

    public function setTotal_Price(float $total_Price) : void
    {
        $this->total_Price = $total_Price;
    }

    public function getStatus() : string
    {
        return $this->status;
    }

    public function setStatus(string $status) : void
    {
        $this->status = $status;
    }
}
?>

