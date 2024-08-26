<?php 
  include __DIR__."/inc/header.inc.php";
  include __DIR__."/inc/ingredients.inc.php";

?>
    <h1><?=$heading3;?></h1>
    <p><?=$para3;?></p>
    <figure style="text-align: center;">
      <img style="max-width: 20rem;" 
           src="/images/3.jpeg" 
           alt="Our amazing restaurant" />
           <figcaption><?=$fCaption;?></figcaption>
    </figure>
    <p><?=$para3_2;?></p>
 <?php include __DIR__."/inc/footer.inc.php" ?>