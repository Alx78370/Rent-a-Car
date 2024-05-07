<?php 

require_once 'EntityRepository.php';

class ClientRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "client");
    } 
}