<?php
<<<<<<< HEAD
  define("DB_SERVER", "localhost")
  define("DB_USER", "id5250817_team27")
  define("DB_PASS", "id5250817_team27")
  define("DB_NAME", "id5250817_aggieclassified")

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER,  DB_USER, DB_PASS, DB_NAME)
    return $connection
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }
  
 ?>
=======
   require_once('db_credentials.php');

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
>>>>>>> 51a9d37b2a239fe0e2b0c4df84dc105552ade412
