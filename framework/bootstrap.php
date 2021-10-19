<?php

use Dotenv\Dotenv;
use Framework\App;
use Framework\Database\Connection;
use Framework\Database\Database;

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));

