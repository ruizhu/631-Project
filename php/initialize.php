<?php
  ini_set('display_errors', 1);
  require_once('database.php');
  $db = db_connect();
  session_start();

  function check_signin() {
    if(session_id() == NULL) {
      header('Location: ../signin.php');
    }
  }
?>
