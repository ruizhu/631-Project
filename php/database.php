<?php
  define("DB_SERVER", "localhost")
  define("DB_USER", "id5250817_team27")
  define("DB_PASS", "id5250817_team27")
  define("DB_NAME", "id5250817_aggieclassified")

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER,  DB_USER, DB_PASS, DB_NAME)
    return $connection
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }
  
 ?>
