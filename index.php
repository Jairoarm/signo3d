<?php
    require_once('components/data-fetch.php');

    $portfolio = new Portfolio();
    $renders_info = $portfolio->get_renders_info();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>signo3d</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <!-- <div class="social_bar">
            <p class="p_social_bar">
                <a href="https://www.facebook.com/signo3d" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCZS66cQhYEZRnSR7BJvCdrA?view_as=subscriber" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/jairoarmprieto/?hl=es-la" target="_blank"><i class="fab fa-youtube"></i></a>
            </p>
        </div> -->

        <header class="navbar_menu">
            <div>
                <img src="assets/logo_signo3d.jpg" alt="logo de la empresa signo3d sas" title="logo de la empresa signo3d sas" width="120">
            </div>

            <nav class="navbar">
                <a class="navbar_a" href="01_portafolio.html" target="_self">Portafolio</a>
                <a class="navbar_a" href="02_nosotros.html" target="_self">Nosotros</a>
                <a class="navbar_a" href="03_contacto.html" target="_self">Contacto</a>
            </nav>
        </header>

        <section class="portfolio">
            <?php require_once('templates/portfolio.php'); ?>
        </section>
    </body>
</html>