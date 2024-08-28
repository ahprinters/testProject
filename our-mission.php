<?php 
include __DIR__."/inc/mission.inc.php";
   
include __DIR__."/inc/header.inc.php";


?>
    <h1><?=$heading1;?></h1>
    <p><?=$ourMission;?></p>
    <figure style="text-align: center;">
      <img style="max-width: 20rem;" 
           src="/images/1.jpeg" 
           alt="Our amazing restaurant" />
      <figcaption><?=$fCaption; ?></figcaption>
    </figure>
    <p><?=$cuisine;?></p>
 
    <?php  include __DIR__."/inc/footer.inc.php" ?>