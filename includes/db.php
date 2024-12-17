<?php
class Database {
    private static $instance = null;
    private $connection;

    // Information for database connection
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'eduom';

    private function __construct() {
        $this->connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if (!$this->connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    // Use singleton for get instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Use method for return connection to database
    public function getConnection() {
        return $this->connection;
    }
}

// Use singleton for connecting to database
$dbInstance = Database::getInstance();
$connection = $dbInstance->getConnection();

// Test database
// if ($connection) {
//     echo "Database connected successfully.";
// }
