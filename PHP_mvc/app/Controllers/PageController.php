<?php 

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToStudent = str_replace('{id}', 1, $routes->get('student')->getPath());

        require_once APP_ROOT . '/views/home.php';
	}
}