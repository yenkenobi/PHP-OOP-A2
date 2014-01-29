<?php
/**
 * Created by PhpStorm.
 * User: Yen Hoang
 * Date: 1/28/14
 * Time: 6:22 PM
 */

class GenreQuery {
    protected $pdo;
    protected $sql;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->sql = "SELECT * FROM genres";
    }

    public function getAll() {
        $statement = $this->pdo->prepare($this->sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

} 