<?php

include('db.php');

if (isset($_POST['save_task3'])) {
  $title3 = $_POST['title3'];
  $description3 = $_POST['description3'];
  $query3 = "INSERT INTO task3(title3, description3)
   VALUES ('$title3', '$description3')";
  $result3 = mysqli_query($conn, $query3);
  if(!$result3) {
    die("Query Failed");
  }

  $_SESSION['message'] = 'Task3 Saved Successfully';
  $_SESSION['message_type'] = 'success';
  
  header("Location: index3.php");

}

?>
