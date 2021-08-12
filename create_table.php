<html>
 <head>
  <title>Создание таблицы в БД</title>
 </head>
 <body>
<?php
$conn = new mysqli("localhost", "root", "", "students_db");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "CREATE TABLE Students (id INTEGER AUTO_INCREMENT PRIMARY KEY, surname VARCHAR(15), name VARCHAR(15), age INTEGER, course INTEGER)";
if($conn->query($sql)){
    echo "Таблица Students успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}
echo "<br>";
echo "Подключение успешно установлено";
$conn->close();
?>
</body>
</html>
