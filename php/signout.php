<?php
  require_once('./initialize.php');
  session_destroy();
  header('Location: ../signin.php');
?>
