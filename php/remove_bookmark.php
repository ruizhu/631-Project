<?php
  require_once('./initialize.php');
  $post_id = $_GET["post_id"];
  $user_id = $_SESSION["user_id"];
  remove_bookmark($user_id, $post_id);
?>
