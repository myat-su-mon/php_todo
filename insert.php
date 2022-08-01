<?php

require "conn.php";

if(isset($_POST['submit'])){
    $task = $_POST['task'];

    $insert = $conn->prepare("INSERT INTO tasks (task) VALUES (:task)");
    $insert->execute([':task' => $task]);
    header("location: index.php");
}else {
    echo "no";
}

?>
