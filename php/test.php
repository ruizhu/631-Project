<?php
$user_id = 3;
$post_id = 2;
$sql = "DELETE FROM bookmark ";
$sql .= "WHERE post_id = '" . $post_id . "'";


  echo $sql;

?>
