<?php
class Database {

    protected $host = "localhost";
    protected $dbname = "football-team";
    protected $dbusername = "root";
    protected $dbpassword = "test123";
    private $db;

    public function connection() {
        try{
           $this->db = new PDO ("mysql:dbname=$this->dbname;host=$this->host", $this->dbusername, $this->dbpassword);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    public function getDb() {
        if ($this->db instanceof PDO) {
             return $this->db;
        }
    }
}
?>