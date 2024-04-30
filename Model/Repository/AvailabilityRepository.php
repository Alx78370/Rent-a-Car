<?php 

require_once 'EntityRepository.php';

class AvailabilityRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "availability");
    }
}