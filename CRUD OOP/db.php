<?php
// Why using PDO(PHP Data Object) ahead of:
// $connection = mysqli_connect("localhost", "root", "", "cms_git")
/* 
PDO provides a data-access abstraction layer, which means that,
regardless of which database i am using, i use the same functions to issue
queries and fetch data.
 */

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "oop_crud_db";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
