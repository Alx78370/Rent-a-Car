<?php

require_once 'EntityRepository.php';

class VehicleRepository extends EntityRepository
{
    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "vehicle");
    }
}
