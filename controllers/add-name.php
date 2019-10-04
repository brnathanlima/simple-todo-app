<?php
$query->insert('users', [
    'id' => null,
    'name' => $_POST['name']
]);

header('Location: /practitioner');