<?php

include("db.php");

if(isset($_GET['id2'])) {
  $id2 = $_GET['id2'];
  $query2 = "DELETE FROM task2 WHERE id2 = $id2";
  $result2 = mysqli_query($conn, $query2);
  if(!$result2) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task2 Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index2.php');
}

?>
