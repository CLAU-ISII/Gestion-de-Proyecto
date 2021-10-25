<?php

include("db.php");

if(isset($_GET['id4'])) {
  $id4 = $_GET['id4'];
  $query4 = "DELETE FROM task4 WHERE id4 = $id4";
  $result4 = mysqli_query($conn, $query4);
  if(!$result4) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'task4 Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: historia.php');
}

?>
