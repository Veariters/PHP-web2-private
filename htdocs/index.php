<?php
function print_title()
{
  if(isset($_GET['id'])){
    echo $_GET['id'];
    }
    else {
    echo "Welcome";
    }
}

function print_discription()
{
  if(isset($_GET['id'])){
   echo file_get_contents("data/".$_GET['id']);
 }else {
   echo "Hello PHP";
 }
}

 function print_list()
 {
   $list = scandir('./data'); //스캔디렉토리
   $i = 0;
   while($i < count($list)){ // 데이터폴더내 파일 갯수보다 i가 적으면 반복
     if($list[$i] != '.' && $list[$i] != '..') { // . , ..이 아닐때
         echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
         // "\ ... "\ : 문법 무시하고 작성합니다.
     }
     $i = $i + 1;
   }
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title();
       ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
     <?php
        print_list();
      ?>
    </ol>
    <h2>
      <?php
        print_title();
       ?>
    </h2>

    <?php
      print_discription();
     ?>

  </body>
</html>
