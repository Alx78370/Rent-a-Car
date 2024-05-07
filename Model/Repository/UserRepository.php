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

    public function findUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
}



