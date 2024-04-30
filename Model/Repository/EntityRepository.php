<?php

abstract class EntityRepository
{
    protected $pdo;

    public function __construct($pdo = null)
    {
        if ($pdo) {
            $this->pdo = $pdo;
        } else {
            $this->pdo = new PDO("mysql:host=localhost;dbname=rent_a_car", "root", "");
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param string $table exemple : ["client"]
     */

    public function getAll(string $table): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM :table");
        $statement->bindParam(":table", $table);
        $statement->execute();
        $table = ucfirst($table);
        return $statement->fetchAll(PDO::FETCH_CLASS, $table::class);
    }

    /**
     * @param string $table exemple : ["client"]
     * @param int $id exemple : ["1"]
     * @return object exemple : ["Agency {id : 1, agencyName : AgenceDuNord, address : '23 rue du clodo', phone : 0669696969}"]
     */

    public function getById(string $table, int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM :table WHERE id= :id");
        $statement->bindParam(":table", $table);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $table = ucfirst($table);
        return $statement->fetch(PDO::FETCH_CLASS, $table::class);
    }

    /**
     * @param string $table exemple : ["client"]
     * @param string $columns exemple : ["first_name", "last_name"]
     * @return string $values exemple : ["Christopher", "Farcoz"]
     */

    public function create(string $table, string $columns, string $values): void
    {
        $statement = $this->pdo->prepare("INSERT INTO :table (:columns) VALUE (:values)");
        $statement->bindParam(":table", $table);
        $statement->bindParam(":columns", $columns);
        $statement->bindParam(":values", $values);
        $statement->execute();
    }

    /**
     * @param string $table exemple : ["client"]
     * @param string $columns exemple : ["first_name", "last_name"]
     * @return string $values exemple : ["Christopher", "Farcoz"]
     */

    public function update(string $table, string $columns, string $values): void
    {
        $statement = $this->pdo->prepare("UPDATE :table SET :columns = ':values'");
        $statement->bindParam(":table", $table);
        $statement->bindParam(":columns", $columns);
        $statement->bindParam(":values", $values);
        $statement->execute();
    }

    /**
     * @param string $table exemple : ["client"]
     * @param string $filtre exemple : ["id = 1"]
     */

    public function delete(string $table, string $filtre): void
    {
        $statement = $this->pdo->prepare("DELETE FROM :table WHERE :filtre");
        $statement->bindParam(":table", $table);
        $statement->bindParam(":filtre", $filtre);
        $statement->execute();
    }

    /**
     * @param array $tables exemple : ["agency", "vehicle"]
     * @param array $foreignKeys exemple : ["agency.id = agency_id"]
     * @param string $columns exemple : "agency.name, vehicle.model"
     * @param string $filtre exemple : "agency.id = 1"
     * @return array exemple : [0 => Cinema, 1 => Movie, 2 => Movie
     */

    public function getByFiltreJoinTables(array $tables, array $foreignKeys, string $columns, string $filtre = ''): array
    {
        // récuperer les colonnes de la première table
        $query = "SELECT :columns FROM :tables[0]";

        // boucler sur les tables d'après pour les joindre
        for ($i = 1; $i < count($tables); $i++) {
            $query .= " JOIN :tables[$i] ON :foreignKeys[$i]";
        }

        // ajouter le filtre
        if ($filtre != '') {
            $query = " WHERE :filtre";
        }

        $statement = $this->pdo->prepare($query);
        $statement->bindValue(":columns", $columns);

        // boucler sur les tables pour les lier
        for ($i = 0; $i < count($tables); $i++) {
            $statement->bindValue(":tables[$i]", $tables[$i]);
        }

        // boucler sur les foreignKeys pour les lier
        for ($i = 1; $i < count($tables); $i++) {
            $statement->bindValue(":foreignKeys[$i]", $foreignKeys[$i]);
        }

        // lier le filtre
        $statement->bindValue(":filtre", $filtre);
        $statement->execute();

        // retourner les résultats
        $tables[0] = ucfirst($tables[0]);
        return $statement->fetchAll(PDO::FETCH_CLASS, $tables[0]::class);
    }
}
