<?php
// echo ('model work');\


class Model extends Db
{

    public function __construct()
    {
        parent::__construct();

        try {
            $connection = new PDO('mysql:host=localhost;dbname=samochody','root','root');
            $this->connection = $connection;
            } catch (PDOException $e) {
                echo ($e);
                exit("Database error.");
            }

        // var_dump($this->select());
    }

    public function select($from = 'auta', $what = "*") {
        // var_dump($this->connection);
        echo ('im in select');
        $query = $this->connection->query("SELECT " . $what . " FROM " . $from);
        // $query = $this->connection->query("SELECT * FROM auta");

        // var_dump($query);
        $items = $query->fetchAll(PDO::FETCH_NUM);
        return $items;

    }
}
