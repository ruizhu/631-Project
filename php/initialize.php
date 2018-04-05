<?php
  ini_set('display_errors', 1);
  require_once('database.php');
  $db = db_connect();

  function check_signin() {
    if($_COOKIE["PHPSESSID"] == NULL) {
      header('Location: ../signin.php');
    }
  }
?>
