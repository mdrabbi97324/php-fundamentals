<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';
// require base_path('Database.php');
spl_autoload_register(function ($class) {
    // Code\Database
    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");
});
// require base_path('Response.php');
require base_path('Core/router.php');






