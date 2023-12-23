<?php
    namespace app\models;
    require_once __DIR__ . '/../../vendor/autoload.php';
    use app\config\DatabaseConnection;

    class Admin{
        static public function getAll(){

         $stmt = DatabaseConnection:: connect()->prepare('SELECT * FROM users');
         $stmt->execute();
         return $stmt->fetchAll();
        }


    }

?>