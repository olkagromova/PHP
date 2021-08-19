<?php 
namespace App\Models;

class Student
{
	protected $id;
	protected $surname;
	protected $name;
	protected $age;
	protected $course;
	
    // GET METHODS
	public function getId()
	{
		return $this->id;
	}
	
	public function getSurname()
	{
		return $this->surname;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getCourse()
	{
		return $this->course;
	}
	
    // SET METHODS
    public function setSurname (string $surname )
	{
		$this->surname  = $surname ;
	}
	
	public function setName(string $name)
	{
		$this->name = $name;
	}
	
	public function setAge(string $age)
	{
		$this->age = $age;
	}
	
	public function setCourse (string $course)
	{
		$this->course = $course ;
	}
	

    // CRUD OPERATIONS
	public function create(array $data)
	{
		//include 'create_table.php';
	}
	
	public function read(int $id)
	{
		$this->surname = 'Smith';
		$this->name = 'John';
		$this->age = 20;
		$this->course = 4;

		return $this;
		//include 'select.php';
	}
	
	public function update(int $id, array $data)
	{
		//include 'index_update.php';
		//include 'update.php';
	}
	
	public function delete(int $id)
	{
		//include 'index_delete.php';
		//include 'delete.php';
	}
}