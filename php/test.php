<?php
$user_id = 3;
$post_id = 2;
$sql = "INSERT INTO `bookmark`";
$sql .= "(`user_id`, `post_id`) VALUES (";
$sql .= "'" . $user_id . "', ";
$sql .= "'" . $post_id . "'";
$sql .= ")";


  echo $sql;

?>
