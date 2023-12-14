<?php

require 'functions.php';
// require 'router.php';
// connect to the database and execute a query
require 'Database.php';

$config = require 'config.php';


$id = $_GET['id'];

$query = "select * from posts where id = :id";


dd($query);
$db = new Database($config['database']);
$posts = $db->query($query, [':id' => $id])->fetch();

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }



