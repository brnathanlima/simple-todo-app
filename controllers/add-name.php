<?php
App::get('database')->insert('users', [
    'id' => null,
    'name' => $_POST['name']
]);

header('Location: /practitioner');