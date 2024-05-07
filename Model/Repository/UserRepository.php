<?php

require_once 'EntityRepository.php';

class UserRepository extends EntityRepository {

    public function __construct($pdo = null)
    {
        parent::__construct($pdo, "user");
    }

    public function createUser($data) {
    
        $sql = "INSERT INTO user (username, Email, phone, address, password, firstname, lastname) 
                VALUES (:username, :Email, :phone, :address, :password, :firstname, :lastname)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':username' => $data['username'],
            ':Email' => $data['Email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':password' => $data['password'],
            ':firstname' => $data['firstname'],
            ':lastname' => $data['lastname']
        ]);
    }
    
}

?>

