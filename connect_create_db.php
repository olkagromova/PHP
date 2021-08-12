<html>
 <head>
  <title>Подключение и создание БД</title>
 </head>
 <body>
<?php
$conn = new mysqli("localhost", "root", "");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
// Создаем базу данных students_db
$sql = "CREATE DATABASE students_db";
if($conn->query($sql)){
    echo "База данных успешно создана";
	echo "<br>";
} else{
    echo "Ошибка: " . $conn->error;
}
echo "<br>";
echo "Подключение успешно установлено";
$conn->close();
?>
 </body>
</html>

