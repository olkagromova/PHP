<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('student', new Route(constant('URL_SUBFOLDER') . '/student/{id}', array('controller' => 'StudentController', 'method'=>'showAction'), array('id' => '[0-9]+')));
