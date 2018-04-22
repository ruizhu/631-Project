<?php
  require_once('./initialize.php');
  $user_id = $_SESSION['user_id'];
  $password = $_POST["password"];

  $password = addslashes($password);

  $result = change_password($user_id, $password);

  if($result) {
    session_destroy();
    header('Location: ../signin.php');
  } else {
    echo "change fail";
  }
?>
