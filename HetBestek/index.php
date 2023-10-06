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

    </div>
    <!-- aanbevolen producten slider -->
    <div class="aanbevolen">
        <div class="slides">
            <?php include "./Carousel.html" ?>
        </div>
    </div>
</body>
<?php include "./footer.php" ?>
</html>