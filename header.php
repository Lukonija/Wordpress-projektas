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
                <a href="#"><img src="wp-content\themes\projektas\assets\img/Laikas-Dirbti-Logo.1.jpg" alt="logo" /></a>
            </div>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary'
                    'items_wrap' => '<div>%3$s</div>'
                )
            );
            ?>
            <div class="main-navigation">
                <div class="buttons">
                    <button class="apie-mus"><a href="/assets/html/laikasdirbti_1.html">Apie mus</a></button>
                    <button class="specialistu-paieska">
                        <a href="/assets/html/laikasdirbti_2.html">Specialistų paieška</a>
                    </button>
                    <button class="kontaktai"><a href="/assets/html/laikasdirbti_3.html">Kontaktai</a></button>
                </div>
            </div>
            <div class="navigation">
                <input type="checkbox" class="toggle-menu" />
                <div class="hamburger"></div>
                <div class="menu">
                    <div class="buttons-toggle">
                        <button class="apie-mus"><a href="/assets/html/laikasdirbti_1.html">Apie mus</a></button>
                        <button class="specialistu-paieska">
                            <a href="/assets/html/laikasdirbti_2.html">Specialistų paieška</a>
                        </button>
                        <button class="kontaktai"><a href="/assets/html/laikasdirbti_3.html">Kontaktai</a></button>
                    </div>
                </div>
            </div>
    </header>