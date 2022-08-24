<?php
  require_once('lib/print.php');
  require_once('view/top.php');
 ?>
      <a href="create.php">create</a>

    <?php  if(isset($_GET['id'])){ ?>  <!--ID값이 뭔가 있으면.-->
      <a href="update.php?id=<?= $_GET['id']; ?>">update</a>  <!--php echo 를 = 등호로 생략가능.-->

      <!--<a href="delete_process.php?id=<?= $_GET['id'];?>">
      delete</a> GET방식 링크로 삭제를 구현하면 링크 url클릭한번 으로 의도하지않은 삭제가 발생할수있음-->

      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete">
      </form>
      <!--포스트 방식으로 삭제를 구현 -->

    <?php }  // 파라미터값이 있을때만 업데이트를 표시함. 즉 작성글일때만.?>

    <h2>
      <?php
        print_title();
       ?>
    </h2>

    <?php
      print_discription();
     ?>

     <?php
      require('view/bottom.php');
      ?>
