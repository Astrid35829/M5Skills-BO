<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/main.js" defer></script>
    <title>BO</title>
</head>
<body>
    <nav class="nav">
        <img class="nav__logo" src="img/logo.png" alt="">
        <ul class="nav__list">
            <li class="nav__listitem">Home</li>
            <li class="nav__listitem">De Game</li>
            <li class="nav__listitem">SDG's</li>
            <li class="nav__listitem">Over</li>
            <li class="nav__listitem">Contact</li>
        </ul>
    </nav>
    <header class="header">
        <button class="header__button">Speel het spel!</button>
    </header>
    <section class="sdgs">
        <?php

            for ($i = 0; $i < 3; $i++){
                include('../source/view/card.php');
            }

        ?>
    </section>
    <section class="about">
        <?php include('../source/view/about.php');
        ?>
    </section>
    <footer class="footer">Contact Info</footer>
</body>
</html>