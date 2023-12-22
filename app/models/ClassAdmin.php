<?php
    include_once __DIR__.'/../config/connection.php';

    class Admin{
        static public function getAll(){

         $stmt = DatabaseConnection:: connect()->prepare('SELECT * FROM users');
         $stmt->execute();
         return $stmt->fetchAll();
        }








    }










?>