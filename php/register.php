<?php
  require_once('./initialize.php');
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $email = addslashes($email);
  $password = addslashes($password);

  if (check_account_exist($email)) {
    $result = signin($email, $password);
  } else {
    register($email, $password);
    $result = signin($email, $password);
  }

  if($result) {
    $_SESSION["email"] = $email;
    $_SESSION["user_id"] = get_id_by_email($email);
    header('Location: ../index.php');
  } else {
    echo "<script>alert(\"Wrong email or password!\")";
    header('Location: ../signin.php');
  }

?>
