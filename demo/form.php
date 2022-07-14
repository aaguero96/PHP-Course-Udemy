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
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
    <input type="text" placeholder="Enter Username" name="username">
    <input type="password" placeholder="Enter Password" name="password">
    <br>
    <input type="submit" name="submit">
  </form>
</body>
</html>