<!-- https://codingstatus.com/login-with-ajax-in-php-mysql/ -->
<!-- i get the code from there -->

<?php

class Database{
    private $hostname     = "localhost";
    private $username     = "root";
    private $password     = "";
    private $databasename = "test1";
    public $conn;


    public function __construct() {
        // Create a new MySQLi connection
        try {
            $this->conn =  mysqli_connect($this->hostname, $this->username, $this->password, $this->databasename, "3307");
            if ($this->conn->connect_error) {
                die('Connection failed: ' . $this->conn->connect_error);
            }
            // echo 'Connection Successfully ';
        } catch (Exception $e) {
            // Handle any potential connection errors
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

}

//$obj = new Database();

?>