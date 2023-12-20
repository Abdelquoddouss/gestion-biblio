<?php
    include '../config/connection.php';
    include '../models/User.php';
    session_start();
    class AuthController
    {
        public function signup($fullname,$lastname,$email,$password,$phone){
            $objuser= new User($fullname,$lastname,$email,$password,$phone);
            $result = $objuser->create();
            header("location: ../../../views/login.php");
        }

        public function login($email,$password,){
            $obj= new User(null,null,$email,$password,null);
            $data=$obj->getUserByUsername();
            if(empty($email)|| empty($password)){
                echo"von avez pas enregistrer le nom et prenom";
            }elseif (empty($data)) {
                echo"email not on data base";
            }else {
                if(password_verify($password,$data['password'])){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header("location: ../views/Dachboard.php");
                    if ($data['name']=='admin') {
                        header("location:../../../views/Dachboard.php");
                    }elseif($data['name']=='utilisateur'){
                        header("location:../../../index.php");
                    }
                }
            }
        }
    }

    if (isset($_POST['signup_submit'])) {
        $auth = new AuthController();
        $auth->signup($_POST["fullname"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["phone"]);
    }
    

    if (isset($_POST['login_submit'])) {
        $auth = new AuthController();
        $res= $auth->login($_POST["email"],$_POST["password"]);
        // var_dump($res);
    }
?>