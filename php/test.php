<?php
$sql = "INSERT INTO user ";
$sql .= "(email, password) ";
$sql .= "VALUES (";
$sql .= "'" . $email . "', ";
$sql .= "'" . $password . "'";
$sql .= ")";

  echo $sql;
?>
