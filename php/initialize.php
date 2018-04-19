<?php
  ini_set('display_errors', 1);
  require_once('database.php');
  $db = db_connect();

  session_start();

  function check_signin($user_id) {
<<<<<<< HEAD
    if(!isset($user_id)) {
      header('Location: ../signin.php');
=======
     if(!isset($user_id)) {
       header('Location: ../signin.php');
>>>>>>> b5422c62267ea00ef2f003c234f64f7f2307ed67
    }
  }
?>
