<?php
namespace repository;
//Import
require_once 'config\Connection.php';
require_once 'repository\UserRepository.php';
require_once 'model\User.php';
//Use
use config\Connection;
use repository\UserRepository;
use model\User;
use PDO;

class UserRepositoryImpl implements UserRepository{
    private $link=null;
    function __construct(){
        $this->link = Connection::connect();
    }
    function save(User $user){
        $sql ="insert into user (username,password) values (:username,:password)";
        $stmt = $this->link->prepare($sql);
        $stmt->bindParam(":username",$user->username,PDO::PARAM_STR);
        $stmt->bindParam(":password",$user->password,PDO::PARAM_STR);
        $stmt->execute();
        
    }
    function update(User $user){
        $sql ="update user set username= :username , password = :password  where id = :id";
        $stmt = $this->link->prepare($sql);
        $stmt->bindParam(":username",$user->username,PDO::PARAM_STR);
        $stmt->bindParam(":password",$user->password,PDO::PARAM_STR);
        $stmt->bindParam(":id",$user->id,PDO::PARAM_INT);
        $stmt->execute();
       
    }
    function findAll(){
        $sql ="select * from user ";
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    function getOne($id){
        $sql ="select * from user  where id = :id";
        $stmt = $this->link->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }
    function deleteById($id){
        $sql ="delete from user  where id = :id";
        $stmt = $this->link->prepare($sql);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
        $stmt->execute();
  
    }
    function newGetOne(){
        $userTemp = new User();
        $user = (array)$userTemp;
        $user["id"]=$this->generateId();
        $user["username"]=null;
        $user["password"]=null;
        return $user;
    }
    function generateId(){
        $sql ="select max(id)+1 from user";
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        $id = $stmt->fetch();
        return $id["0"];

    }
    public function login(User $user){
        $stmt =$this->link->prepare("select * from user where username = :username and password = :password");
        $stmt->bindParam(":username",$user->username,PDO::PARAM_STR);
        $stmt->bindParam(":password",$user->password,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->fetch()){
            return 1;
        }else{
            return 0;
        }
        $stmt->close();
    }
}
