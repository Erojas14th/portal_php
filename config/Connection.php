<?php 
namespace config;
use PDO;
class Connection{

    public function connect(){

        $link = new PDO("mysql:host=localhost;dbname=portal_php","root","");
        return $link;
    }
}