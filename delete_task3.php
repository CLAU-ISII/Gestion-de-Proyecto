<?php

include("db.php");

if(isset($_GET['id3'])) {
  $id3 = $_GET['id3'];
  $query3 = "DELETE FROM task3 WHERE id3 = $id3";
  $result3 = mysqli_query($conn, $query3);
  if(!$result3) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index3.php');
}

?>
