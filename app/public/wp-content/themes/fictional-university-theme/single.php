<?php
    get_header();

    while(have_posts()) {
        // wp fn - keep track of which post currently working with
        the_post(); ?> 
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?}

    get_footer();
?>

