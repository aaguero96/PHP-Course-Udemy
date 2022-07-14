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
    // empty variable name
    $name;
    // string examples
    $string1 = 'valor1';
    $string2 = "valor2";
    // number examples
    $number = 10;
    // Pattern is camelCase
    // html tag example, not necessary .
    $tag = "<h1>$string1 - $string2</h1>";
  ?>
  <!-- Display variable -->
  <h1><?php echo $string1 ?></h1>
  <h1><?php echo $tag ?></h1>
  <!-- Use . for concatenate texts -->
  <h1><?php echo $string2 . " " . $number?></h1>
</body>
</html>