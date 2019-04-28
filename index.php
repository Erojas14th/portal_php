<?php 
//Importes
require_once 'controller\NavegacionController.php';
require_once 'controller\UserController.php';
//Use
use controller\NavegacionController;
use controller\UserController;

//Default
$controlador_home="navegacion";
$controlador_home_action="home";
// Captura de peticiones
$controlador = isset($_REQUEST["controlador"])?$_REQUEST["controlador"]:$controlador_home;
$action = isset($_REQUEST["action"])?$_REQUEST["action"]:$controlador_home_action;
// Casos de peticiones
switch($controlador){
    case "navegacion":
        $navegacionController = new NavegacionController();
        if ($action == "home"){$navegacionController->home();}
       
        ;break;

        case "user":
        $userController = new UserController();
        if ($action == "login") {$userController->login();}
        if ($action == "salir") {$userController->salir();}

        ;break;
}