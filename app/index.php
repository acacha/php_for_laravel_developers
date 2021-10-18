<?php

require 'app/helpers.php';
//require 'app/database.php';

require 'app/Task.php';

//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = 'ri48e17r9cfJIqGu';

//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e) {
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

//fetchAllTasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();


