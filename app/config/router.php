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

$router->add(
    '/letter/index',
    [
        'controller'=>'Letter',
        'action'=>'index'
    ]
);


$router->handle();
