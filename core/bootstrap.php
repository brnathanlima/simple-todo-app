<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = require 'config.php';

require 'core/Router.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';
require 'User.php';

return new QueryBuilder(Connection::make($config['database']));