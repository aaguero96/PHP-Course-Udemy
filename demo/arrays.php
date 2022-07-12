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
    $exampleList = [1, 'a', '<h1>Hello</h1>'];
    echo $exampleList[0];
    echo "<br>";
    echo $exampleList[1];
    echo "<br>";
    echo $exampleList[2];
    // Function to print array
    print_r($exampleList);
  ?>
</body>
</html>