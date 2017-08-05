<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    '/',
    [
        'controller'=>'index',
        'action'=>'index'
    ]
);

$router->add(
    '/publetter/show/{id}',
    [
        'controller'=>'PubLetter',
        'action' => 'show'
    ]
);

$router->add(
    '/public/charges',
    [
        'controller'=>'public',
        'action'=>'charges'
    ]
);

$router->handle();
