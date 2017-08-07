<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();

$app['debug'] = true;

$users = array(
        1 => array(
            '_id'       => 1,
            'username'  => 'nazmul',
            'password'  => '123',
            'profession'=> 'Dev',
        ),
        2 => array(
            '_id'       => 2,
            'username'  => 'kausar',
            'password'  => '456',
            'profession'=> 'IT',
        ),
    );

$app->GET('/', function(Application $app, Request $request) {
    return new Response('Home Page');
});

$app->GET('/users', function(Application $app, Request $request) use ($users){ 
    return json_encode($users);
});

$app->GET('/users/{id}', function(Application $app, Request $request, $id) use ($users){
    if(array_key_exists($id, $users))
        return json_encode($users[$id]);

    return "User Not Found";    
});

$app->run();