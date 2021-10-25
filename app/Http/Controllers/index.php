<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');

require '../resources/views/index.blade.php';


