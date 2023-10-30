<?php 
/**
 * POP-Framebook
 * Routes definition
 * 
 * Use this file to define routes of the Pop-Framebook,
 * 
 * @version 1.0
 * 
 * @param string   name         The name of the route
 * @param string   path         The path of the URI
 * @param string   controller   Class and Method of the controller
 * @param string[] methods      Allowed HTTP Methods
 * @param array    requirement  Parameters requirement
 * @param array    defaults     Parameters default value
 */
return [

    // Start Page
    [
        'name'        => "pop:start",
        'path'        => "/",
        'controller'  => "App\Controller\PopController::index",
        'methods'     => ['HEAD', 'GET'],
    ],
    // [
    //     'name'        => "pop:param",
    //     'path'        => "/pop/{param}",
    //     'controller'  => "App\Controller\PopController::pop_parameter",
    //     'methods'     => ['HEAD', 'GET'],
    //     'requirement' => [
    //         'param' => "[\w-]+",
    //     ],
    //     'defaults'    => [
    //         'param' => "John",
    //     ],
    // ],

    // Book pages
    [
        'name'        => "book:index",
        'path'        => "/books",
        'controller'  => "App\Controller\BookController::index",
        'methods'     => ['HEAD', 'GET'],
    ],
    [
        'name'        => "book:create",
        'path'        => "/book",
        'controller'  => "App\Controller\BookController::create",
        'methods'     => ['GET', 'POST'],
    ],
    [
        'name'        => "book:detail",
        'path'        => "/book/{id}",
        'controller'  => "App\Controller\BookController::detail",
        'methods'     => ['HEAD', 'GET'],
        'requirement' => [
            'param' => "\d",
        ],
    ],
    [
        'name'        => "book:edit",
        'path'        => "/book/{id}/edit",
        'controller'  => "App\Controller\BookController::update",
        'methods'     => ['GET', 'POST'],
        'requirement' => [
            'param' => "\d",
        ],
    ],
    [
        'name'        => "book:delete",
        'path'        => "/book/{id}/delete",
        'controller'  => "App\Controller\BookController::delete",
        'methods'     => ['GET', 'DELETE'],
        'requirement' => [
            'param' => "\d",
        ],
        'defaults'    => [],
    ],

    // Redirection pages
    [
        'name'        => "documentation",
        'path'        => "/documentation",
        'controller'  => "App\Controller\DocController::index",
        'methods'     => ['HEAD', 'GET'],
    ],
];