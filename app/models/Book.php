<?php
    include_once __DIR__.'/../config/connection.php';

class Book{

    static public function getAlll(){

        $stmt = DatabaseConnection:: connect()->prepare('SELECT * FROM book');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function Insert($title,$author,$genre,$description,$publicatin_year,$total_copies,$available_copies){
        $query= "INSERT INTO `book` (title,author,genre,description,publicatin_year,total_copies,available_copies) VALUES (?,?,?,?,?,?,?)";

        $pdo= DatabaseConnection::connect();
        $stmt=$pdo->prepare($query);
        $stmt->bindValue(1, $title);
        $stmt->bindValue(2, $author);
        $stmt->bindValue(3, $genre);
        $stmt->bindValue(4, $description);
        $stmt->bindValue(5, $publicatin_year);
        $stmt->bindValue(6, $total_copies);
        $stmt->bindValue(7, $available_copies);
        $result=$stmt->execute();
        $stmt->closeCursor();
        

    } 




}



?>