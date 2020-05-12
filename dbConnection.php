<?php
session_start();
require_once("C:\\xampp\\htdocs\\hospital\\Dbh.php");
abstract class dbconnect{
    protected $db;
    protected $conn;

    public function connect(){
        if(null === $this->conn ){
            $this->db = new Dbh();
        }
        return $this->db;
    }
}
?>