<?php
namespace controller;
//Imports
require_once 'utils\PHPUtils.php';

//Use
use utils\PHPUtils;

class NavegacionController{
private $PHPUtils = null;

    function __construct(){
        $this->PHPUtils = new PHPUtils();
    }
    public function home(){
        require_once 'web\templates\plantillas\home_header.php';
        require_once 'web\home.php';
        require_once 'web\templates\plantillas\home_footer.php';
    }


   
    
}