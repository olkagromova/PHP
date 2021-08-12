<?php 
$conn = new mysqli("localhost", "root", "", "students_db");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Студенты</title>
<meta charset="utf-8" />
</head>
<body>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $st_id = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM Students WHERE id = '$st_id'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
				$st_surname = $row["surname"];
                $st_name = $row["name"];
                $st_age = $row["age"];
				$st_course = $row["course"];
            }
            echo "<h3>Обновление студента</h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$st_id' />
					<p>Фамилия:
                    <input type='text' name='surname' value='$st_surname' /></p>
                    <p>Имя:
                    <input type='text' name='name' value='$st_name' /></p>
                    <p>Возраст:
                    <input type='number' name='age' value='$st_age' /></p>
					<p>Курс:
                    <input type='number' name='course' value='$st_course' /></p>
                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
elseif (isset($_POST["id"]) && isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["age"])&& isset($_POST["course"])) {
      
    $st_id = $conn->real_escape_string($_POST["id"]);
    $st_surname = $conn->real_escape_string($_POST["surname"]);
    $st_name = $conn->real_escape_string($_POST["name"]);	
    $st_age = $conn->real_escape_string($_POST["age"]);
    $st_course = $conn->real_escape_string($_POST["course"]);
	
    $sql = "UPDATE Students SET surname = '$st_surname', name = '$st_name', age = '$st_age', course = '$st_course' WHERE id = '$st_id'";
    if($result = $conn->query($sql)){
        header("Location: index_update.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
?>
</body>
</html>