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
    
    public function findUserByEmail($email)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // ou PDO::FETCH_OBJ selon tes préférences
    }
}



