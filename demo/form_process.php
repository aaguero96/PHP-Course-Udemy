<?php
  if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    define("MIN_USERNAME", 1);
    define("MAX_USERNAME", 25);
    define("USERS", ["andre", "amanda", "bruna"]);
    if (strlen($username) < MIN_USERNAME) {
      echo "Username has to be longer than one chars" . "<br>";
    }
    elseif (strlen($username) > MAX_USERNAME) {
      echo "Username has to be shorter than twenty five chars" . "<br>";
    }
    elseif (!in_array($username, USERS)) {
      echo "Sorry you are not allowed" . "<br>";
    }
    echo "Welcome " . $username;
  }
?>