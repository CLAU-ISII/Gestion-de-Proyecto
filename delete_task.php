
<?php

include("conexion.php");

if(isset($_GET['id'])) { 
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id"; 
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Query Failed");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: proyecto.php');
}

?>