<?php

use App\Core\Router;

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

$router = new Router();

require 'app/routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

$router->direct($uri, $method);
