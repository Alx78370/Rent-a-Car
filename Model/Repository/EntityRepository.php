<?php

abstract class EntityRepository
{
    protected $pdo;
    protected $table;

    public function __construct($pdo = null, $table)
    {
        if ($pdo) {
            $this->pdo = $pdo;
        } else {
            $this->pdo = new PDO("mysql:host=localhost;dbname=rent_a_car", "root", "");
        }
        $this->table = $this->checkTableName($table);
    }
    private function checkTableName($table)
    {
        // Liste blanche des noms de table valides

        $allowedTables = ['vehicle', 'agency', 'client', 'reservation', 'user'];
        if (!in_array($table, $allowedTables)) {
            throw new InvalidArgumentException("Invalid table name: {$table}");
        }
        return $table;
    }

    /**
     * @return PDO
     */

    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @return string exemple : "2021-06-01"
     */

    public function getCurrentDate(): string
    {
        $currentDate = new DateTime();
        return $currentDate->format('Y-m-d');
    }

    /**
     * @return array exemple : [0 => Agency {id : 1, agencyName : AgenceDuNord, address : '23 rue du clodo', phone : 0669696969}]   
     */

    public function getAll(): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM `{$this->table}`");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param int $id exemple : ["1"]
     * @return object exemple : ["Agency {id : 1, agencyName : AgenceDuNord, address : '23 rue du clodo', phone : 0669696969}"]
     */

    public function getById(int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE id= :id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $table = ucfirst($this->table);
        return $statement->fetch(PDO::FETCH_CLASS, $table::class);
    }

    /**
     * @param string $columns exemple : ["first_name", "last_name"]
     * @param string $values exemple : ["Christopher", "Farcoz"]
     */

    public function create(string $columns, string $values): void
    {
        $statement = $this->pdo->prepare("INSERT INTO `{$this->table}` (:columns) VALUE (:values)");
        $statement->bindParam(":columns", $columns);
        $statement->bindParam(":values", $values);
        $statement->execute();
    }

    /**
     * @param string $columns exemple : ["first_name", "last_name"]
     * @param string $values exemple : ["Christopher", "Farcoz"]
     */

    public function update(string $columns, string $values): void
    {
        $statement = $this->pdo->prepare("UPDATE `{$this->table}` SET :columns = ':values'");
        $statement->bindParam(":columns", $columns);
        $statement->bindParam(":values", $values);
        $statement->execute();
    }

    /**
     * @param string $filtre exemple : ["id = 1"]
     */

    public function delete(string $filtre): void
    {
        $query = "DELETE FROM `{$this->table}` WHERE :filtre";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(":filtre", $filtre);
        $statement->execute();
    }
}
