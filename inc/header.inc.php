<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Lead Restaurant &bull; <?= $pageTitle;  ?>  </title>
</head>

<body>
    <header class="header-with-background" style="background-image: url('<?= $headerImage ?? "images/default.jpeg" ?>'); ">
        <h1>Lead Restaurant</h1>
        <p>Your sanctuary for exceptional flavors</p>
        <nav>
            <?php $pageKey = $pageKey ?? "" ?>
            <a class ="<?php if ($pageKey === "mission") echo 'active'; ?>" href="our-mission.php">Our mission</a>
            <a class ="<?php if ($pagekey === "ingredients") echo 'active';?>" href="ingredients.php">Our Ingredients</a>
            <a class="<?php  if ($pagekey==="menu") echo 'active';?>" href="menu.php">Menu</a>
        </nav>
    </header>

    <main>