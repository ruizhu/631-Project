<?php
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

  // function create_post($userid, $title, $price, $contact, $category, $purpose, $description, $image) {
  //   global $db;
  //   $sql = "INSERT INTO `post` (`userid`, `title`, `price`, `contact`, `category`, `purpose`, `description`, `image`)
  //   VALUES	($userid, $title, $price, $contact, $category, $purpose, $description, $image);";
  //   $result = mysqli_query($db, $sql);
  //   return result;
  // }
?>
