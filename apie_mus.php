<?php /* Template Name: apie_mus */ ?>
<?php get_header1(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<main>
    <div class="main">
        <div class="container-main">
            <h1>Apie mus</h1>
            <div class="content">
                <h3>Tikslas</h3>
                <p>
                    Mūsų tikslas yra atrinkti kvalifikuotus įvairių sričių
                    specialistus, kurių sugebėjimai atitiks Jūsų lūkesčius. Todėl Jūsų
                    pavestos užduotys bus atliktos tinkamai.
                </p>
                <br />
                <h3>Bendradarbiavimo forma</h3>
                <p>
                    Jei nuspręsite su mumis bendradarbiauti, specialistų įdarbinimas
                    vyks darbo jėgos nuomos forma.
                </p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>