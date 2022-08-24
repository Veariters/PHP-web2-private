<?php
function print_title()
{
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']) ;
    }
    else {
    echo "Welcome";
    }
}

function print_discription()
{
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
 }else {
   echo "Hello PHP";
 }
}

 function print_list()
 {
   $list = scandir('./data'); //스캔디렉토리

   $i = 0;
   while($i < count($list)){ // 데이터폴더내 파일 갯수보다 i가 적으면 반복
      $title = htmlspecialchars($list[$i]);
     if($list[$i] != '.' && $list[$i] != '..') { // . , ..이 아닐때
         echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
         // "\ ... "\ : 문법 무시하고 작성합니다.
     }
     $i = $i + 1;
   }
}
 ?>
