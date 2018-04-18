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
>>>>>>> 75fedf8df3e9f85fa24783c7d4d3d364ddc8952f
    }
  }
?>
