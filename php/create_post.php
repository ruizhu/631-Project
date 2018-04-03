<?php
  require_once('./initialize.php');
    // $userid = $_COOKIE['userid'] ?? '';
  $userid = 1;
  $title = $_POST['title'] ?? '';
  $price = $_POST['price'] ?? '';
  $contact = $_POST['contact'] ?? '';
  $category = $_POST['category'] ?? '';
  $purpose = $_POST['purpose'] ?? '';
  $description = $_POST['description'] ?? '';
  $image = $_POST['image'] ?? '';

  echo $userid . "<br />";
  echo $title . "<br />";
  echo $price . "<br />";
  echo $contact . "<br />";
  echo $category . "<br />";
  echo $purpose . "<br />";
  echo $description . "<br />";
  echo $image . "<br />";

  $result = create_post($userid, $title, $price, $contact, $category, $purpose, $description, $image);

  if($result) {
    echo "success";
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
