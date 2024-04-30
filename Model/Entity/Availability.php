<?php

class Availability {
    private int $id;
    private int $vehicle_Id;
    private DateTime $starting_Date;
    private DateTime $ending_Date;
    private string $status;
    
    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getVehicle_Id() : int
    {
        return $this->vehicle_Id;
    }

    public function setVehicle_Id(int $vehicle_Id) : void
    {
        $this->vehicle_Id = $vehicle_Id;
    }

    public function getStarting_Date() : DateTime
    {
        return $this->starting_Date;
    }

    public function setStarting_Date(DateTime $starting_Date) : void
    {
        $this->starting_Date = $starting_Date;
    }

    public function getEnding_Date() : DateTime
    {
        return $this->ending_Date;
    }

    public function setEnding_Date(DateTime $ending_Date) : void
    {
        $this->ending_Date = $ending_Date;
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