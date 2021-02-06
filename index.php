<?php
    require_once('utils/utils.php');

    require_once('api/renders-data-api.php');

    require_once('components/portfolio.php');
    require_once('components/project.php');

    require_once('components/data-template-parser.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>signo3d</title>
        <meta name="viewport" content="width=device-width , initial-scale=1 , user-scalable=no"/>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/portfolio.css">
        <link rel="stylesheet" href="css/project.css">
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
            <div class="logo-wrapper">
                <img src="assets/logo_signo3d.jpg" alt="logo de la empresa signo3d sas" title="logo de la empresa signo3d sas">
            </div>

            <?php // require_once('templates/nav.php'); ?>
        </header>

        <main>
            <section class="portfolio">
                <?php require_once('templates/' . $template); ?>
            </section>
        </main>
    </body>
</html>