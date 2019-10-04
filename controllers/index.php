<?php
$users = $query->selectAll('users', 'User');

require 'views/index.view.php';
