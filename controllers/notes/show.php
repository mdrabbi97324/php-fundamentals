<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUserId = 9;


// $note = $db->query("SELECT * from notes where id = :id", ['id' => $_GET['id']])->fetch();
$note = $db->query("SELECT * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();


authorize($note['user_id'] == $currentUserId);



view("/notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);