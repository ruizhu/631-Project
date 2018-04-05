<?php
  require_once('./initialize.php');

  // $userid = $_COOKIE['userid'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $result = login($email, $password);

  if($result) {
    session_start();
    $_SESSION["email"] = $email;
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
