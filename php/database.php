<?php
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

   function create_post() {

   }
?>
