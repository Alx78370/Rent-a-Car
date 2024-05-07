<?php

require_once 'EntityRepository.php';

class UserRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "user");
    }

    public function createUser(array $data): bool
    {
        return $this->create($data);
    }
}


