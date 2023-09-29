<?php 
/**
 * POP-Framework
 * Routes definition
 * 
 * Use this file to define routes of the Pop-Framework,
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
    [
        'name'        => "pop:start",
        'path'        => "/",
        'controller'  => "App\Controller\PopController::pop_simple",
        'methods'     => ['HEAD', 'GET'],
    ],
    [
        'name'        => "pop:param",
        'path'        => "/pop/{param}",
        'controller'  => "App\Controller\PopController::pop_parameter",
        'methods'     => ['HEAD', 'GET'],
        'requirement' => [
            'param' => "[\w-]+",
        ],
        'defaults'    => [
            'param' => "John",
        ],
    ],
];