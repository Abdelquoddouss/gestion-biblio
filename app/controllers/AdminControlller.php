<?php
    include_once __DIR__.'/../models/ClassAdmin.php';
class AdminController{

    public function getAllUsers(){
        $utilisateur = Admin::getAll();
        return  $utilisateur;

    }





}











?>