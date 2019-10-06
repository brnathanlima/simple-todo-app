<?php

use App\Core\App;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
        Connection::make(
            App::get('config')['database']
        )
    )
);
App::bind('helpers', require 'helpers.php');