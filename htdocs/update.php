<?php
  require_once('lib/print.php');
  require_once('view/top.php')
 ?>

      <a href="create.php">create</a>

    <?php  if(isset($_GET['id'])){ // ID값이 뭔가 있으면. ?>
    <a href="update.php?id=<?= $_GET['id']; //php echo 를 = 등호로 생략가능. ?>">update</a>
  <?php }  // 파라미터값이 있을때만 업데이트를 표시함. 즉 작성글일때만.?>

    <h2>
      <?php
        print_title();
       ?>
    </h2>

    <?php
      print_discription();
     ?>

     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <p>
         <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>" >
       </p>
       <p>
         <textarea name="description" placeholder="Description" value><?php print_discription(); ?></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>

     <?php
      require('view/bottom.php');
      ?>
