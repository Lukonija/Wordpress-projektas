<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body>
    <header class="header index-header">
        <div class="container">
            <div class="logo">
                <a href="/projektas"><img src="/projektas/wp-content/themes/projektas/theme-template/img/Laikas-Dirbti-Logo.1.jpg" alt="logo" /></a>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="nav-menu">%3$s</ul>'
                )
            );
            ?>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>