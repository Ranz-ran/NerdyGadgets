<?php
include "../HetBestek/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- external links -->
    <link rel="stylesheet" href="style.css">
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
    <div class="aanbevolen">
        <div class="slides">
            <div class="slide"><img src="image1.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="image2.jpg" alt="Slide 2"></div>
            <div class="slide"><img src="image3.jpg" alt="Slide 3"></div>

            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
            <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
    </div>
</body>
<footer>
    <!-- indien nodig? -->
</footer>
</html>