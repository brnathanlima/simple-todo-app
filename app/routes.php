<?php
$router->get('practitioner', 'PagesController@home');
$router->get('practitioner/about', 'PagesController@about');
$router->get('practitioner/contact', 'PagesController@contact');
$router->get('practitioner/users', 'UsersController@index');
$router->post('practitioner/users', 'UsersController@store');
