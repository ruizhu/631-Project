<?php
  require_once('./initialize.php');
  $post_id = $_GET["post_id"];
  delete_post($user_id, $post_id);
?>
