<?php

include('db.php');

if (isset($_POST['save_task5'])) {
  //$id5 = $_POST['id5'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $login= $_POST['login'];
  $tipo_usuario = $_POST['tipo_usuario'];
 



  $query5 = "INSERT INTO usuario ( usuario, password, login, tipo_usuario)
   VALUES ('$usuario','$password','$login', '$tipo_usuario')";
  $result5 = mysqli_query($conn, $query5);
  if(!$result5) {
    die("Query Failed");
  }

  $_SESSION['message'] = 'Task5 Saved Successfully';
  $_SESSION['message_type'] = 'success';
  
  header("Location: tablero.php");

}

?>
