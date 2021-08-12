<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "", "students_db");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $st_id = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM Students WHERE id = '$st_id'";
    if($conn->query($sql)){
         
        header("Location: index_delete.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>