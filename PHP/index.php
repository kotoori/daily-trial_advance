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
    //連想配列
      $score = ["数学" => 98, "英語" => 83, "社会" => 43, "国語" => 66, "理科" => 78];
      echo $score["英語"];
      echo "<br>";
      $score["英語"] = 11;
      echo $score["英語"];
      echo "<br>";

      //foreachも使える
      foreach($score as $num){
        echo $num;
        echo "<br>";
      }
    ?>
  </h1>
</body>
</html>