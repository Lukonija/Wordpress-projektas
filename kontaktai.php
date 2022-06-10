<?php /* Template Name: kontaktai */ ?>
<?php get_header(); ?>

<main>
    <div class="main">
        <div class="container-main">
            <h1>Kontaktai</h1>
        </div>
    </div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
</main>

<?php get_footer(); ?>