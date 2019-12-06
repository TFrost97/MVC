<?php 

class DB
{
    protected function __construct()
    {

        // echo "db";
        $this->test = 'test';
        // db host
        $this->dbParams = array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => 'root',
            'dbname' => 'samochody',
            'port' => '3306',
        );
    }
}