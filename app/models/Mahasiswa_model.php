<?php

class Mahasiswa_model {
    // Database Handler
    private $dbh;
    private $statement;

    public function __construct() {
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMhs() {
         $this->statement = $this->dbh->prepare('SELECT * FROM mahasiswa');
         $this->statement->execute();
         return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}