<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $soulwalkers = array('Haru', 'Awin', 'Stella', 'Jin' , 'Iris','chie','F-Nel','LeeNabi','Dana');
    echo $soulwalkers[0].'<br>';
    echo $soulwalkers[2].'<br>';
    echo $soulwalkers[5].'<br>';
    var_dump(count($soulwalkers)); //개수
    array_push($soulwalkers,'enoc');
    var_dump($soulwalkers);
     ?>

  </body>
</html>
