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

    public function login(){
        
        $user = new User();
        $user->username=isset($_POST["username"])?$_POST["username"]:"";
        $user->password=isset($_POST["password"])?$_POST["password"]:"";
        $flag = $this->dao->login($user);
        if($flag==1){
            require_once 'web\templates\plantillas\inicio_header.php';
            require_once 'web\templates\inicio\inicio.php';
            require_once 'web\templates\plantillas\home_footer.php';
           
        }else{

        }
    }
    public function salir(){
        require_once 'web\templates\plantillas\home_header.php';
        require_once 'web\home.php';
        require_once 'web\templates\plantillas\home_footer.php';
    }
}