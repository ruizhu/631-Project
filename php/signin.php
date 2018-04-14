<?php
  require_once('./initialize.php');

  // $user_id = $_COOKIE['user_id'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $result = signin($email, $password);

  if($result) {
    $_SESSION["email"] = $email;
    $_SESSION["user_id"] = get_id_by_email($email);
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
