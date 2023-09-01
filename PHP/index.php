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
      function scoreCheck($score){
        echo '点数は ';
        echo $score;
        echo ' です。ということは・・・';
        if($score >= 80){
          echo '点数は80点以上<br>';
        }elseif($score >= 60){
          echo '点数は60〜79の間<br>';
        }elseif($score >= 40){
          echo '点数は40〜59の間<br>';
        }elseif($score >= 20){
          echo '点数は20〜39の間<br>';
        }else{
          echo '点数は19以下<br>';
        }
        return;
      }
      $scoreArray = [100, 80, 79, 60, 59, 40, 39, 20, 19, 0, -2];
      foreach($scoreArray as $score){
        scoreCheck($score);
      }
    ?>
  </h1>
</body>
</html>