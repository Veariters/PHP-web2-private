<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
     <?php
        $list = scandir('./data');
        //scandir : 디렉토리에서 파일리스트를 가져오는 함수 , 스캔 디렉토리
        var_dump($list);

      ?>
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
        echo $_GET['id'];
        }
        else {
        echo "Welcome";
        }
       ?>
    </h2>

    <?php
    if(isset($_GET['id'])){
     echo file_get_contents("data/".$_GET['id']);
   }else {
     echo "Hello PHP";
   }

     ?>

  </body>
</html>
