<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    function printInScreeen($value){
      echo "<p>" . $value . "</p>";
    }
    $string = "Hello student do you like the class";
    printInScreeen(strlen($string));
    printInScreeen(strtoupper($string));
    printInScreeen(strtolower($string));
  ?>
</body>
</html>