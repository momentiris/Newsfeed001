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

        <!-- Below, we loop through our array fom data.php in order to echo out the different parts (values) of it in different sections of our html. -->

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


  </body>
</html>
