<?php get_header();

    ?><div class="main--block">
        <h1 class="centered-text"><?php the_title(); ?></h1>
        <div class="section">
            <?php wp_reset_postdata();
            the_content(); ?>
        </div>
        <p class="right-text"><em>-<?php echo get_field('reviewers_name'); ?></em></p>
        <p class="centered-text separated-text"><a href="<?php echo esc_url(site_url('/reviews')); ?>" class="light-link">See all reviews</a></p>
    </div>

<?php get_footer();
?>