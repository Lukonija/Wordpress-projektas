<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<div class="index-fonas">
    <h1 class="index-h1">Jūsų darbo jėgos poreikis - mūsų rūpestis.</h1>
</div>

<?php get_footer(); ?>