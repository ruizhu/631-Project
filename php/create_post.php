<?php
  require_once('./initialize.php');
    // $userid = $_COOKIE['userid'] ?? '';
  $userid = $_SESSION['userid'];
  $title = $_POST['title'] ?? '';
  $price = $_POST['price'] ?? '';
  $contact = $_POST['contact'] ?? '';
  $category = $_POST['category'] ?? '';
  $purpose = $_POST['purpose'] ?? '';
  $description = $_POST['description'] ?? '';
  $image = $_POST['image'] ?? '';

  $result = create_post($userid, $title, $price, $contact, $category, $purpose, $description, $image);

  if($result) {
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
