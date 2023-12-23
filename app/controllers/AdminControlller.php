<?php
 namespace app\controllers;
  require_once __DIR__ . '/../../vendor/autoload.php';
  use app\models\Admin;


class AdminController{

    public function getAllUsers(){
        $utilisateur = Admin::getAll();
        return  $utilisateur;

    }

}

$data= new AdminController();
	$util=$data->getAllUsers();










?>