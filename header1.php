<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head1(); ?>
</head> <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="nav-menu">%3$s</ul>'
            )
        );
        ?>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="/wp-content/themes/projektas/theme-template/img/Laikas-Dirbti-Logo.1.jpg" alt="logo" /></a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item active">
                    <a href="/assets/html/laikasdirbti_1.html" class="nav-link">Apie mus</a>
                </li>
                <li class="nav-item">
                    <a href="/assets/html/laikasdirbti_2.html" class="nav-link">Specialistų paieška</a>
                </li>
                <li class="nav-item">
                    <a href="/assets/html/laikasdirbti_3.html" class="nav-link">Kontaktai</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>