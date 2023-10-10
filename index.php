<?php
include "HetBestek/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- external links -->
    <link rel="stylesheet" href="HetBestek/style.css">
    <link rel="stylesheet" href="HetBestek/homepage.css">
    <title>Nerdy Gadgets</title>
</head>

<nav>
    <!-- vul hier uw pagina's in voor toekomstige sprints -->
    <a href="#">sample</a>
</nav>
<body>
    <!-- als je wil kan je hier bijvoorbeeld de slogan plakken als je wilt -->
    <div class="slogan">

    </div>
    <!-- aanbevolen producten slider -->
    <?php require("HetBestek/Carousel.html") ?>

            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
            <button class="next" onclick="plusSlides(1)">&#10095;</button>
</body>
<?php include "HetBestek/footer.php" ?>
</html>