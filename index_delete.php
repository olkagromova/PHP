<!DOCTYPE html>
<html>
<head>
<title>Студенты</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список студентов</h2>
<?php
$conn = new mysqli("localhost", "root", "", "students_db");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM Students";
if($result = $conn->query($sql)){
	echo "<table><tr><th>Фамилия</th><th>Имя</th><th>Возраст</th><th>Курс</th></tr>";
    foreach($result as $row){
        echo "<tr>";
			echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
			echo "<td>" . $row["course"] . "</td>";
            echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                </form></td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>