<?php

namespace Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * @var
     */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $className)
    {
        $stmt = $this->pdo->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_CLASS, $className);
    }

    public function deleteRow($table, $id)
    {
        $this->pdo->query("DELETE FROM $table WHERE id = $id");
    }

    public function insert($table, $parameters)
    {
        $query = sprintf(
            "INSERT INTO %s (%s) VALUES(%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))
        );

        try {
            $s = $this->pdo->prepare($query);
            $s->execute($parameters);
            return true;
        } catch (\PDOException $exeption) {
            return false;
        }
    }

}
