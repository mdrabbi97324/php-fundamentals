<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// if($uri ==='/'){
//     require 'controllers/index.php';
// } else if ($uri === '/about'){
//     require 'controllers/about.php';
// } else if($uri === '/contact'){
//     require 'controllers/contact.php';
// } else if($uri === '/mission'){ 
//     require 'controllers/mission.php';
// }


$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact'=> 'controllers/contact.php',
    '/mission'=> 'controllers/mission.php'
];


function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


function abort($code = 404){
    http_response_code($code);
    
    require "views/{$code}.php";
}

routeToController($uri, $routes);