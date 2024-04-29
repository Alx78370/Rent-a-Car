<?php 

class EntityRepository {
    private $pdo;

    public function __construct($pdo = null) {
        if ($pdo) {
            $this->pdo = $pdo;
        } else {
            $this->pdo = new PDO("mysql:host=localhost;dbname=rent_a_car", "root", "");
        }
    }

    public function getPdo() {
        return $this->pdo;
    }


    public function getAll($table) {
        $statement = $this->pdo->prepare("SELECT * FROM:table");
        $statement->bindParam(":table", $table);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $table::class);
    }

    public function getById($table, $id) {
        $statement = $this->pdo->prepare("SELECT * FROM:table WHERE id= :id");
        $statement->bindParam(":table", $table);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $table::class);
    }
    
}