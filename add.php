<?php
$conn = new mysqli("localhost", "root", "", "students_db1");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO Students (surname, name, age, course) VALUES 
            ('Воробьёв','Андрей', 17, 2), 
            ('Соболев','Антон', 17, 1), 
			('Ященко','Зоя', 16, 1), 
			('Сидора','Тамара', 19, 3), 
            ('Скачко','Яна', 21, 5), 
			('Федина','Рита', 23, 6), 
            ('Каваев','Сергей', 20, 4)";
if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>