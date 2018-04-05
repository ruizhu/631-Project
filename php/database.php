<?php
  define("DB_SERVER", "localhost");
  // define("DB_USER", "team27");
  // define("DB_PASS", "team27admin");
  // define("DB_NAME", "aggieclassified");
  define("DB_USER", "root");
  define("DB_PASS", "thp33111");
  define("DB_NAME", "istm631");

  function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

function get_id_by_email($email) {
  global $db;
  $sql = "SELECT userid FROM user ";
  $sql .= "WHERE email = '" . $email . "'";
  $result = mysqli_fetch_row(mysqli_query($db, $sql));
  return $result[0];
}

  function get_latest_20() {
    global $db;
    $sql = "SELECT * FROM post ORDER BY postid DESC LIMIT 20";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function create_post($userid, $title, $price, $contact, $category, $purpose, $description, $image) {
    global $db;
    $sql = "INSERT INTO post";
    $sql .= "(userid, title, price, contact, category, purpose, description, image)";
    $sql .= "VALUES	(";
    $sql .= "'" . $userid . "',";
    $sql .= "'" . $title . "',";
    $sql .= "'" . $price . "',";
    $sql .= "'" . $contact . "',";
    $sql .= "'" . $category . "',";
    $sql .= "'" . $purpose . "',";
    $sql .= "'" . $description . "',";
    $sql .= "'" . $image . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function login($email, $password) {
    global $db;
    $sql = "SELECT * FROM user ";
    $sql .= "WHERE email = '" . $email . "'";
    $sql .= "AND password = '" . $password . "'";

    $result = mysqli_query($db, $sql);
    return $result;
  }


 ?>
