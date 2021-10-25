<?php

include('db.php');

if (isset($_POST['save_task4'])) {
  $title4 = $_POST['title4'];
  $description4 = $_POST['description4'];
  $query4 = "INSERT INTO task4(title4, description4)
   VALUES ('$title4', '$description4')";
  $result4 = mysqli_query($conn, $query4);
  if(!$result4) {
    die("Query Failed");
  }

  $_SESSION['message'] = 'task4 Saved Successfully';
  $_SESSION['message_type'] = 'success';
  
  header("Location: historia.php");

}

?>
