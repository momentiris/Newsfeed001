<?php
require __DIR__.'/data.php';
require __DIR__.'/functions.php';


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

  <body>

        <div class="backgroundimage">
        </div>

        <!-- <form class="form" action="phpassignment.php" method="post">
          Name: <input type="text" name="name">
          Message: <input type="text" name="title" value="">
          Title: <input type="text" name="" value="">
                <input type="submit">

        </form> -->



        <?php foreach ($contentArrays as $contentArray): ?>

          <div class="hideme">
            <div class="first">
              <h1 class="title"><?php  echo $contentArray['title'];?></h1>
              <h4 class="author">Posted by: <?php echo $contentArray['author']['name'];?></h3>

          </div>
            <div class="second">
              <p class="content">   <?php echo $contentArray['content'];?></p>
          </div>

          <div class="third">
            <p class="time">Submitted on <?php echo $contentArray['time'];?></p>
            <p class="likes"><button type="button" name="Like!"><?php echo $contentArray['likes'];?> Thumbs up!</button></p>
            </div>
          </div>

          <?php endforeach ?>









    <!-- /*
     n  Authors och content behöver lagras i arrays, antingen i en multimensionell eller två separata.
      The news feed items should contain:

          - Title
          - Content
          - Author name
          - Published date
          - Like counter (the number of likes a news feed item has received)

      The news feed author items should contain the following data:

          - ID
          - Full name


    */ -->



  </body>
</html>
