<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>デイトラ</title>
</head>
<body>
  <h1>
    <?php
      function calCircleArea($radius){
        $pai = 3.14;
        $area =  $radius * $radius * $pai; #半径 * 半径 * 3.14
        return $area;
      }
      echo calCircleArea(1);
      echo "<br>";
      echo calCircleArea(2);
      echo "<br>";
      echo calCircleArea(3);
      echo "<br>";
      echo calCircleArea(4);
      echo "<br>";
    ?>
  </h1>
</body>
</html>