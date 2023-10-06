<?php
include "./header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- responsive code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- external links -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homepage.css">
    <title>Nerdy Gadgets</title>
</head>

<nav>
    <!-- vul hier uw pagina's in voor toekomstige sprints -->
    <a href="#">sample</a>
</nav>
<body>
    <!-- als je wil kan je hier bijvoorbeeld de slogan plakken als je wilt -->
    <div class="slogan">
    <p>The gadgets that improve your modern day life. </p>
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
    <p>Wij de makers van Nerdy Gadgets willen ervoor zorgen dat het leven makkelijker wordt gemaakt voor onze klanten.
        Niet alleen het makkelijk maken van iemands leven vinden wij belangrijk,
        maar ook de mensen met hobby’s en interesses die door onze Gadgets enthousiast worden.
        Wij wensen u veel plezier en enthousiasme op onze webwinkel!</p>
    <div class="slide"><img src="../Img/nerdy gadgets.jpg" alt="Slide 1"></div>
</body>
<?php include "./footer.php" ?>
</html>