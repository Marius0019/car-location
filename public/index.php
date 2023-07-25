<?php

// Démarrer la session en premier
session_start();

use \App\Core\Router;
use \App\Core\Autoloader;

// require_once '../src/Core/Router.php';
require_once '../src/Core/Autoloader.php';


// Appeller la method static register de ma class Autoloader
Autoloader::register();
$router = new Router();
$router->execute();