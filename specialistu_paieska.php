<?php /* Template Name: specialistu_paieska */ ?>
<?php get_header(); ?>

<main>
    <div class="main">
        <div class="container-main">
            <form class="searchForm">
                <input class="searchInput" type="text" placeholder="Įveskite specialisto pavadinimą" required />
                <button class="searchButton" type="submit">Ieškoti</button>
            </form>
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