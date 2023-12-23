<?php
    namespace app\config;
    require_once __DIR__ . '/../../vendor/autoload.php';
    use Dotenv\Dotenv;
    use PDO;
    $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
    $dotenv->load();
   

class DatabaseConnection{


    public static function connect()
   {
    $host = $_ENV['DB_HOST'];
    $user = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];


    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
            return $pdo;

  }
 
}

 


?>