<?php
    include_once '../controllers/AuthController.php';
    
    class User{
        public $pdo;
        public $fullname;
        public $lastname;
        public $email;
        public $password;
        public $phone;

        public function __construct($fullname,$lastname,$email,$password, $phone)
        {
            $this->pdo = DatabaseConnection::connect();
            $this->fullname=$fullname ;
            $this->lastname=$lastname;
            $this->email=$email ;
            $this->password=$password ;
            $this->phone=$phone ;
        }
    
        public function create()
        {
            $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
        
            $query = "INSERT INTO `users` (fullname, lastname, email, password, phone) VALUES (?, ?, ?, ?, ?)";
        
                $pdo = DatabaseConnection::connect();
        
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(1, $this->fullname);
                $stmt->bindValue(2, $this->lastname);
                $stmt->bindValue(3, $this->email);
                $stmt->bindValue(4, $password_hash);
                $stmt->bindValue(5, $this->phone);
                $result = $stmt->execute();
                $stmt->closeCursor();
                $userid = $pdo->lastInsertId();
                $sql = "INSERT INTO users_role (users_id,role_id) VALUES (:users_id,2)";
                $statement = $pdo->prepare($sql);
                    $statement->bindValue(':users_id', $userid, PDO::PARAM_INT);
                    $statement->execute();
            
        }

        public function getUserByUsername(){ 
            $sql = " SELECT * from users
            INNER JOIN users_role
            ON users.id=users_role.users_id 
            INNER join role 
            ON role.id = users_role.Role_id 
            WHERE email = ?";
            
            $pdo = DatabaseConnection::connect();
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $this->email);
            $stmt->execute();
    
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
    
            return $row;
        }

}

?>