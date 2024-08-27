<?php
$pageTitle = "Menu";
$headerImage = "/images/2.jpeg";
$pageKey = "menu";
$fCaption = "Our amazing Menu List";
$heading2 = "Our menu";
$Starters = "Starters";
$mushroom = "Forest Mushroom Medley";
$mushroomDes = "A seasonal selection of wild mushrooms sautéed with garlic, fresh herbs, and a touch of white wine.";
$Citrus = "Citrus Ceviche";
$CitrusDes = "Freshly caught fish marinated in a blend of citrus juices, served with avocado and homemade tortilla chips.";
$Soups = "Soups";
$roast = "Roasted Root Vegetable Soup";
$roastDes = "A comforting blend of seasonal root vegetables, slow-roasted and pureed into a creamy soup.";
$lemongrass = "Lemongrass Coconut Broth";
$lemongrassDes = "A fragrant blend of lemongrass, ginger, and coconut milk, featuring sustainably sourced shrimp.";
$mainCourses = "Main Courses";
$farm = "Farm-to-Table Herb Chicken";
$farmDes = "Free-range chicken marinated in a medley of garden herbs, oven-roasted to perfection.";
$grass = "Grass-Fed Beef Tenderloin";
$grassDes = "Served with organic roasted vegetables and a red wine reduction.";
$wild = "Wild-Caught Salmon Fillet";
$wildDes = "Pan-seared salmon served on a bed of quinoa and seasonal greens, drizzled with a lemon-dill sauce.";
$vegan = "Vegan Harvest Bowl";
$veganDes = "A hearty bowl filled with quinoa, roasted seasonal vegetables, and a tahini-lemon dressing.";
$desserts =

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
  <li><strong>Raw Berry Cheesecake</strong> - A dairy-free cheesecake made from cashews, with a fresh berry compote.</li>
  <li><strong>Honey Lavender Panna Cotta</strong> - A creamy Italian dessert infused with organic lavender and sweetened with local honey.</li>
</ul>

<?php include __DIR__ . "/inc/footer.inc.php" ?>