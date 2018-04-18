<?php
$user_id = 3;
$sql = "SELECT * FROM post ";
$sql .= "WHERE post_id IN (";
$sql .= "SELECT post_id FROM bookmark ";
$sql .= "WHERE user_id = " . $user_id . ")";


  echo $sql;

?>
