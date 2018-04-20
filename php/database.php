<?php
  define("DB_SERVER", "mysql.hostinger.com");
  define("DB_USER", "u938701707_27");
  define("DB_PASS", "team27admin");
  define("DB_NAME", "u938701707_db1");

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

  function get_latest_20($keyword) {
    global $db;
    $sql = "SELECT * FROM post ";
    $sql .= "WHERE title LIKE '%" . $keyword . "%' ";
    $sql .= "OR post_id LIKE '%" . $keyword . "%' ";
    $sql .= "OR user_id LIKE '%" . $keyword . "%' ";
    $sql .= "OR price LIKE '%" . $keyword . "%' ";
    $sql .= "OR contact LIKE '%" . $keyword . "%' ";
    $sql .= "OR category LIKE '%" . $keyword . "%' ";
    $sql .= "OR purpose LIKE '%" . $keyword . "%' ";
    $sql .= "OR description LIKE '%" . $keyword . "%' ";
    $sql .= "OR image LIKE '%" . $keyword . "%' ";
    $sql .= "OR post_date LIKE '%" . $keyword . "%' ";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function create_post($user_id, $title, $price, $contact, $category, $purpose, $description, $image) {
    global $db;
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

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function signin($email, $password) {
    global $db;
    $sql = "SELECT * FROM user ";
    $sql .= "WHERE email = '" . $email . "'";
    $sql .= "AND password = '" . $password . "'";

    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 0) {
      return FALSE;
    } else {
      return TRUE;
    }
  }

  function get_bookmark_id($user_id) {
    global $db;
    $sql = "SELECT post_id FROM bookmark ";
    $sql .= "WHERE user_id = " . $user_id . "";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function get_bookmark($user_id) {
    global $db;
    $sql = "SELECT * FROM post ";
    $sql .= "WHERE post_id IN (";
    $sql .= "SELECT post_id FROM bookmark ";
    $sql .= "WHERE user_id = '". $user_id . "')";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function add_bookmark($user_id, $post_id) {
    global $db;
    $sql = "INSERT INTO bookmark";
    $sql .= "(user_id, post_id) VALUES (";
    $sql .= "'" . $user_id . "', ";
    $sql .= "'" . $post_id . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function check_bookmarked($user_id, $post_id) {
    global $db;
    $sql = "SELECT post_id FROM bookmark ";
    $sql .= "WHERE user_id = '" . $user_id . "' ";
    $sql .= "AND post_id = '" . $post_id . "'";

    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) == 0) {
      return FALSE;
    } else {
      return TRUE;
    }
  }

  function register($email, $password) {
    global $db;
    $sql = "INSERT INTO user";
    $sql .= "(email, password) ";
    $sql .= "VALUES (";
    $sql .= "'" . $email . "', ";
    $sql .= "'" . $password . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function check_account_exist($email) {
    global $db;
    $sql = "SELECT user_id FROM user ";
    $sql .= "WHERE email = '" . $email . "'";

    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 0) {
      return FALSE;
    } else {
      return TRUE;
    }
  }

  function get_account_post($user_id) {
    global $db;
    $sql = "SELECT * FROM post ";
    $sql .= "WHERE user_id = '" . $user_id . "'";

    $result = mysqli_query($db, $sql);
    return $result;
  }

  function change_password($user_id, $password) {
    global $db;
    $sql = "UPDATE user ";
    $sql .= "SET password = '" . $password . "'";
    $sql .= "WHERE user_id = " . $user_id . "";

    $result = mysqli_query($db, $sql);
    return $result;
  }

 ?>
