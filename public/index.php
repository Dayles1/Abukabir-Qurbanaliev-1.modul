<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/Controllers/PostController.php';
require_once '../app/Controllers/UserController.php'; 

$router = new Router();
$router->get('/users/registr', 'UserController@registr');
$router->get('/users/login', 'UserController@login');
$router->post('/users/handleRegistr', 'UserController@handleRegistr');
$router->post('/users/handleLogin', 'UserController@handleLogin');


$router->get('/login', 'UserController@login');
$router->get('/', 'UserController@index');

$router->get('/posts/main', 'PostController@index');
$router->get('/posts/create', 'PostController@create');
$router->post('/posts/store', 'PostController@store');
$router->get('/posts/show', 'PostController@show');
$router->get('/posts/edit', 'PostController@edit');
$router->post('/posts/update', 'PostController@update');
$router->get('/posts/delete', 'PostController@destroy');

$router->dispatch();
