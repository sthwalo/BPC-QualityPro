<?php get_header(); ?>

<main>
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();  // Elementor hooks into this function to display content
    endwhile;
    ?>
</main>

<?php get_footer(); ?>