<?php
  require_once('./initialize.php');

  // $user_id = $_COOKIE['user_id'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $result = register($email, $password);

  if($result) {
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }

?>
