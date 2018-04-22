<?php
  require_once('./initialize.php');
  $user_id = $_SESSION['user_id'];
  $title = $_POST['title'] ?? '';
  $price = $_POST['price'] ?? '';
  $contact = $_POST['contact'] ?? '';
  $category = $_POST['category'] ?? '';
  $purpose = $_POST['purpose'] ?? '';
  $description = $_POST['description'] ?? '';
  $image = $_POST['image'] ?? '';

  addslashes($title);
  addslashes($price);
  addslashes($contact);
  addslashes($category);
  addslashes($purpose);
  addslashes($description);
  addslashes($image);
  
  $result = create_post($user_id, $title, $price, $contact, $category, $purpose, $description, $image);

  if($result) {
    header('Location: ../index.php');
  } else {
    echo "fail<br />";
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
?>
