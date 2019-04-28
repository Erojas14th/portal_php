<?php 
require_once 'repository\UserRepositoryImpl.php';
require_once 'model\User.php';
use repository\UserRepositoryImpl;
use model\User;

$dao = new UserRepositoryImpl();
$list = $dao->findAll();

echo "<br>============================<br>";

$list = $dao->findAll();
foreach($list as $e){
    echo $e["id"]." - ".$e["username"]."<br>";
}
