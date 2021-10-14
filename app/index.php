<?php

// QUERY STRING
//var_dump ($_GET['name']);
//$name = 'Sergi';

// API
function greet() {
    $name = htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name $surname!";
}

$greeting = greet();


//$greeting = 'Hola ' . $_GET['name'] . ' '. $_GET['name'] .  '!';
