<?php
$user_id = 3;
$email = 2;
$sql = "SELECT user_id FROM user ";
$sql .= "WHERE email = '" . $email . "'";


  echo $sql;

?>
