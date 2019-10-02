<?php
$config = require 'config.php';

require 'core/Router.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';

return new QueryBuilder(Connection::make($config['database']));