<?php
    include_once __DIR__.'/../models/Book.php';

    class BookControllers{

        public function getAllBook(){
            $book= Book::getAlll();
            return $book;
        }


        public function EnregistrerBook($title,$author,$genre,$description,$publicatin_year,$total_copies,$available_copies){
            $obj= new Book();
            $resl=$obj->Insert($title,$author,$genre,$description,$publicatin_year,$total_copies,$available_copies);
            header("location:../../views/Marketplace.php");
        }
    }


    if(isset($_POST['book_submit'])){
        $auth = new BookControllers();
        $auth->EnregistrerBook($_POST["title"],$_POST["author"],$_POST["genre"],$_POST["description"],$_POST["publicatin_year"],$_POST["total_copies"],$_POST["available_copies"]);
    }

?>