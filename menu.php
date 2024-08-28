<?php
include __DIR__ ."/inc/menu.inc.php";
include __DIR__ . "/inc/header.inc.php";


?>
<h1><?=$heading2;?></h1>

<h2><?=$Starters;?></h2>
<ul>
  <li><strong><?=$mushroom;?></strong> - <?=$mushroomDes;?></li>
  <li><strong><?=$Citrus;?></strong> - <?=$CitrusDes;?> </li>
</ul>

<h2><?=$Soups;?></h2>
<ul>
  <li><strong><?=$roast;?></strong> - <?=$roastDes;?> </li>
  <li><strong><?=$lemongrass;?></strong> - <?=$lemongrassDes;?></li>
</ul>

<figure style="text-align: center;">
  <img style="max-width: 20rem;" 
  src="/images/2.jpeg" 
  alt="Our amazing restaurant" />
  <figcaption><?=$fCaption;?></figcaption>
</figure>

<h2><?=$mainCourses;?></h2>
<ul>
  <li><strong><?=$farm;?></strong> - <?=$farmDes;?></li>
  <li><strong><?=$grass;?></strong> - <?=$grassDes;?></li>
  <li><strong><?=$wild;?></strong> - <?=$wildDes;?></li>
  <li><strong><?=$vegan;?></strong> - <?=$veganDes;?></li>
</ul>

<h2><?=$desserts;?></h2>
<ul>
  <li><strong><?=$rawBerry;?></strong> - <?=$rawBerryDes;?> </li>
  <li><strong><?=$honey;?></strong> - <?=$honeyDes;?></li>
</ul>

<?php include __DIR__ . "/inc/footer.inc.php" ?>