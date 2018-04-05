<?php
  require_once('./initialize.php');

  // $userid = $_COOKIE['userid'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $result = login($email, $password);

  if($result) {
    $_SESSION["email"] = $email;
    $_SESSION["userid"] = get_id_by_email($email);
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
