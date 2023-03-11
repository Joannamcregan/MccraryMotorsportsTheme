<?php get_header();

    ?><div class="main--block">
        <h1 class="centered-text"><?php the_title(); ?></h1>
        <div class="section">
            <?php wp_reset_postdata();
            the_content(); ?>
        </div>
    </div>

<?php get_footer();
?>