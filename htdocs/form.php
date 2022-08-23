<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
//post방식으로 데이터를 보낼때는 get이아닌 post로

  // file_put_contents('data/'.$_GET['title'], $_GET['description']);
  //echo "<p>title : ".$_GET['title']."</p>";
  //echo "<p>description : ".$_GET['description']."</p>";
?>
