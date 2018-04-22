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
    echo "<script>alert(\"Wrong email or password!\");";
    echo "window.location.href = \"../signin.php\";</script>";
    // header('Location: ../signin.php');
  }
?>
