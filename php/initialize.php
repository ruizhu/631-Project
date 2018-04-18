<?php
  ini_set('display_errors', 1);
  require_once('database.php');
  $db = db_connect();

  session_start();

  function check_signin($user_id) {
    // if(!isset($user_id)) {
    //   header('Location: ../signin.php');
    }
  }
?>
