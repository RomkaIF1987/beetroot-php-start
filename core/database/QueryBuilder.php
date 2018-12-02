<?php

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

    public function insertName($table, $input_name)
    {
        $this->pdo->query("INSERT INTO $table(name) VALUES('$input_name') ");
    }

}
