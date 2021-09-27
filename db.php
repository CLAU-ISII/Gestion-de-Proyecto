<?php
session_start();

$conn = mysqli_connect(
  "localhost",
  "root",
  "",
  "gestordeproyectos"
) or die(mysqli_erro($conn));

?>