<?php
require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

$router = new Router();

require 'routes.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

require $router->direct($uri, $method);
