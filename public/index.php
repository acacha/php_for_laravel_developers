<?php

use Framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

// URL
// ROUTER -> API redirect quina URI m'ha demanat el usuari -> he d'obtenir el controlador que toca i executar-lo
// /contact -> app/Http/Controllers/contact.php

// LARAVEL FORGE -> MP7 -> locahost -> alumnedam.me
//dd($_SERVER['REQUEST_URI']); URI

//$routes = new Router();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

// FACADES -> IOC CONTAINER -> App
App::get('router')->redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';
//require 'resources/views/index.blade.php';