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
      scoreCheck(100);
      scoreCheck(80);
      scoreCheck(79);
      scoreCheck(60);
      scoreCheck(59);
      scoreCheck(40);
      scoreCheck(39);
      scoreCheck(20);
      scoreCheck(19);
      scoreCheck(0);
      scoreCheck(-1);
    ?>
  </h1>
</body>
</html>