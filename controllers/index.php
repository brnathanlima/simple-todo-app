<?php
$tasks = $query->selectAll('todos', 'Task');

require 'views/index.view.php';
