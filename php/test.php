<?php
$user_id = 3;
$post_id = 2;
$sql = "DELETE FROM bookmark ";
$sql .= "WHERE user_id = '" . $user_id . "' ";
$sql .= "AND post_id = '" . $post_id . "'";


  echo $sql;

?>
