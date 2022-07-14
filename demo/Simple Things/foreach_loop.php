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
    $array = [
      "<p>Número 1</p>",
      "<p>Número 2</p>",
      "<p>Número 3</p>",
      "<p>Número 4</p>",
    ];
    foreach($array as $element){
      echo $element;
    }
  ?>
</body>
</html>