<?php

require_once "Database.php";

class Model extends Database
{
    protected $conn;

    public function __construct()
    {
        parent::__construct();

        $this->conn = $this->getConnection();
    }
}