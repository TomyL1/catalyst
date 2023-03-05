<?php
// Require Composer's autoloader.
require 'vendor/autoload.php';

// Using Medoo namespace.
use Medoo\Medoo;

// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'email_cleaner',
    'username' => 'root',
    'password' => 'root',
    'option' => [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC],
]);

