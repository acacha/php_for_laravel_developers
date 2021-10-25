<?php


use Framework\App;

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();

require 'resources/views/index.blade.php';


