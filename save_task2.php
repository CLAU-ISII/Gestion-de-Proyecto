<?php

include('db.php');

if (isset($_POST['save_task2'])) {
  $title2 = $_POST['title2'];
  $description2 = $_POST['description2'];
  $query2 = "INSERT INTO task2(title2, description2)
   VALUES ('$title2', '$description2')";
  $result2 = mysqli_query($conn, $query2);
  if(!$result2) {
    die("Query Failed");
  }

  $_SESSION['message'] = 'Task2 Saved Successfully';
  $_SESSION['message_type'] = 'success';
  
  header("Location: backlog.php");

}

?>