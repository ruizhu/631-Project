<?php
$sql = "INSERT INTO post";
$sql .= "(user_id, title, price, contact, category, purpose, description, image) ";
$sql .= "VALUES	(";
$sql .= "'" . $user_id . "',";
$sql .= "'" . $title . "',";
$sql .= "'" . $price . "',";
$sql .= "'" . $contact . "',";
$sql .= "'" . $category . "',";
$sql .= "'" . $purpose . "',";
$sql .= "'" . $description . "',";
$sql .= "'" . $image . "'";
$sql .= ")";

  echo $sql;

  $sql = "INSERT INTO user";
  $sql .= "(email, password) ";
  $sql .= "VALUES (";
  $sql .= "'" . $email . "', ";
  $sql .= "'" . $password . "'";
  $sql .= ")";
 echo $sql;
?>
