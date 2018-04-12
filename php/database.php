<?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "team27");
  define("DB_PASS", "team27admin");
  define("DB_NAME", "aggieclassified");

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
  $sql = "SELECT user_id FROM user ";
  $sql .= "WHERE email = '" . $email . "'";
  $result = mysqli_fetch_assoc(mysqli_query($db, $sql));
  return $result["user_id"];
}

  function get_latest_20() {
    global $db;
    $sql = "SELECT * FROM post ORDER BY post_id DESC LIMIT 20";
    $result = mysqli_query($db, $sql);
    return $result;
  }

  function create_post($user_id, $title, $price, $contact, $category, $purpose, $description, $image) {
    global $db;
    $sql = "INSERT INTO post";
    $sql .= "(user_id, title, price, contact, category, purpose, description, image)";
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

  function get_bookmark() {
    global $db;
    $sql = ""

    $result = mysql_query($db, $sql);
    return $result;
  }

  function register($email, $password) {

    return $result;
  }

  function get_account_post($user_id) {
    global $db;

    $sql = "SELECT * FROM post ";
    $sql .= "WHERE user_id = '" . $user_id . "'";

    $result = mysqli_query($db, $sql);
    return $result;
  }


 ?>
