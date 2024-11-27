<?php


class Db
{
    private static ?Db $instance = null;
    private ?PDO $connection = null;

    // Private constructor to prevent direct instantiation
    private function __construct()
    {
        $config = $this->loadConfig();
        
        $dsn = sprintf('%s:host=%s;dbname=%s;charset=%s',
            $config['driver'],
            $config['host'],
            $config['dbname'],
            $config['charset']
        );

        try {
            $this->connection = new PDO($dsn, $config['username'], $config['password']);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Prevent cloning
    private function __clone() {}

    // Prevent unserialization
    public function __wakeup() {}

    // Get the single instance of the class
    public static function getInstance(): Db
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // Get the PDO connection
    public function getConnection(): PDO
    {
        return $this->connection;
    }

    // Load configuration from a JSON file
    private function loadConfig(): array
    {
        $basePath = "/var/www/html/modele/";

        $configPath = $basePath . 'config.json';
        
        if (!file_exists($configPath)) {
            die("Configuration file not found: " . $configPath);
        }

        $configContent = file_get_contents($configPath);
        $config = json_decode($configContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            die("Error decoding JSON configuration: " . json_last_error_msg());
        }

        return $config;
    }
}

// Usage example
try {

    $db = Db::getInstance();
    $connection = $db->getConnection();

    // Perform database operations
    $stmt = $connection->query("SELECT * FROM example_table");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
