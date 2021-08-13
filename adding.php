<?php
if (isset($_POST["st_surname"]) && isset($_POST["st_name"]) && isset($_POST["st_age"]) && isset($_POST["st_course"])) {
      
    $conn = new mysqli("localhost", "root", "", "students_db1");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $surname = $conn->real_escape_string($_POST["st_surname"]);
	$name = $conn->real_escape_string($_POST["st_name"]);
    $age = $conn->real_escape_string($_POST["st_age"]);
	$course = $conn->real_escape_string($_POST["st_course"]);
	
    $sql = "INSERT INTO students (surname, name, age, course) VALUES ('$surname', '$name', $age, $course)";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>