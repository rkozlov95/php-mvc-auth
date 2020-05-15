<?php

$router->get('', 'AuthController@get');

$router->post('', 'AuthController@post');

$router->get('register', 'RegisterController@get');

$router->post('register', 'RegisterController@post');
