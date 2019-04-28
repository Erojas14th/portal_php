<?php
namespace controller;
//Imports
require_once 'repository\UserRepositoryImpl.php';
require_once 'model\User.php';
//Use
use repository\UserRepositoryImpl;
use model\User;

class UserController{
    private $dao =null;

    function __construct(){
        $this->dao = new UserRepositoryImpl();
        
    }

    function save(User $user){
        $user = new User();
        $user->id = isset($_POST["id"]);
        $user->username = isset($_POST["username"]);
        $user->password = isset($_POST["password"]);

        if($user->id!=0){
            $this->dao->update($user);
        }else{
            $this->dao->save($user);
        }

        return $this->findAll();
    }

    function findAll(){

    }
 
    function deleteById(){
        $user = new User();
        $user->id = isset($_POST["id"])?$_POST["id"]:"0";
        if($user->id!=0){
            $this->dao->deleteById($user->id);
        }else{
            // Alert
        }

        return $this->findAll();
    }
    function getOne(){
        $user = new User();
        $user->id=isset($_GET["id"]) ? $_GET["id"] : "0";
        if($user->id !=0){
            $user = $this->dao->getOne($user->id);
        }else{
            $user = $this->dao->newGetOne($user->id);
        }
    }
}