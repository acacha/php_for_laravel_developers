<?php

use Framework\App;

$users = App::get('database')->selectAll('users');

require '../resources/views/users.blade.php';


