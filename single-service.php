<?php get_header();

    ?><div class="main--block">
        <h1 class="centered-text"><?php the_title(); ?></h1>
        <div class="section">
            <?php wp_reset_postdata();
            the_content(); ?>
        </div>
        <p class="centered-text separated-text"><a href="<?php echo esc_url(site_url('/services')); ?>" class="light-link">See all services</a></p>
    </div>

<?php get_footer();
?>