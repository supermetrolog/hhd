<?php

class db
{
    private $db_param;
    public function __construct()
    {
        $this->db_param = include "/openserver/domains/hhd/config/db_conf.php";
    }
    public function dbConnect()
    {
        try {
            $dbh = new PDO("mysql:host=localhost;dbname={$this->db_param['dbname']}", $this->db_param['username'], $this->db_param['password']);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
