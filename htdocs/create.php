<?php
require_once('lib/print.php'); // 함수목록
require_once('view/top.php'); // 상단부
?>

    </ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>

    </form>

    <?php
     require('view/bottom.php');
     ?>
