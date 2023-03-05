<?php

require_once 'mysql_connect.php';

// control if $database is defined
if (!isset($database)) {
    die('Database connection is not defined.');
}

$database->create('instances',[
    'id' => ['INT', 'NOT NULL', 'AUTO_INCREMENT', 'PRIMARY KEY'],
    'name' => ['VARCHAR(255)', 'NOT NULL'],
    'file_src' => ['VARCHAR(255)', 'NOT NULL'],
    'created_at' => ['DATETIME', 'NOT NULL'],
    'updated_at' => ['DATETIME', 'NOT NULL'],
]);
