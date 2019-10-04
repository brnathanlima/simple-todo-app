<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
        // $tasks[0]->fobar();
    }

    public function insert($table, $params)
    {
        $placeholders = array_map(function($param) {
            return ":{$param}";
        }, array_keys($params));

        $sql = sprintf(
            'insert into %s values (%s)',
            $table,
            implode(', ', array_values($placeholders))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}