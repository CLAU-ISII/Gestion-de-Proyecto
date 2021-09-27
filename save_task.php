<? php

include( 'conexion.php' );


if ( isset ( $ _POST [ 'save_task' ])) {
  $title= $ _POST [ 'título' ];
  $description= $ _POST [ 'descripción' ]; -
  $query = "INSERT INTO task (title, description) VALUES ('$title', '$description')" ; 
  $result = mysqli_query ($mysqli, $query);
  if (! $result) { 
    die ("Consulta fallida");
  }

  $ _SESSION [ 'message' ] = 'Tarea guardada correctamente' ;
  $ _SESSION [ 'message_type' ] = 'success' ;
  header( 'Location: proyecto.php' );

}

?>