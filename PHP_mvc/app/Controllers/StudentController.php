<?php 

namespace App\Controllers;

use App\Models\Student;
use Symfony\Component\Routing\RouteCollection;

class StudentController
{
    // Show the student attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $student = new Student();
        $student->read($id);

        require_once APP_ROOT . '/views/student.php';
	}
}