<?php
  define("DB_SERVER", $value);
  define("DB_USER", team27);
  define("DB_PASS", team27);
  define("DB_NAME", "");

   function db_connect() {
     $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
     return $connection;
   }

   function db_disconnect($connection) {
     if(isset($connection)) {
       mysqli_close($connection);
     }
   }

   function get_latest_20() {
     global $db;
     $sql = "SELECT * FROM post ORDER BY postid DESC LIMIT 20";
     $result = mysqli_query($db, $sql);
     return $result;
   }

   function create_post($userid, $title, $price, $contact, $category, $purpose, $description, $image) {
     global $db;
     $sql = "INSERT INTO `post` (`userid`, `title`, `price`, `contact`, `category`, `purpose`, `description`, `image`)
     VALUES	($userid, $title, $price, $contact, $category, $purpose, $description, $image);"
     $result = mysqli_query($db, $sql);
     return result;
   }
?>
