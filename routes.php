<?php
$router->get('practitioner', 'controllers/index.php');
$router->get('practitioner/about', 'controllers/about.php');
$router->get('practitioner/about/culture', 'controllers/about-culture.php');
$router->get('practitioner/contact', 'controllers/contact.php');
$router->post('practitioner/names', 'controllers/add-name.php');
