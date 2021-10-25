<?php

include("db.php");

if(isset($_GET['id5'])) {
  $id5 = $_GET['id5'];
  $query5 = "DELETE FROM usuario WHERE id5 = $id5";
  $result5 = mysqli_query($conn, $query5);
  if(!$result5) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'usuario Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: tablero.php');
}

?>
