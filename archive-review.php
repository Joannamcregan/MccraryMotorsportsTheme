<?php
    get_header();
    ?><div class="main--block">
        <h1 class="centered-text">Reviews</h1>
        <?php while(have_posts()){
            the_post();
            ?><div class="section--box">
                <h3 class="centered-text margin-top-min"><a class='no-underline' href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                <p><?php echo wp_trim_words(get_the_content(), 60, '');?>
                <?php if (str_word_count( strip_tags( strip_shortcodes(get_the_content()))) > 60) {
                    ?><a href="<?php the_permalink();?>" class="no-underline centered-text margin-top-min margin-bottom-min"> ...read more</a>
                <?php }
                ?></p>
                <?php if (get_field('reviewers_name')) {
                    ?><p class="right-text margin-bottom-min"><em>-<?php echo get_field('reviewers_name'); ?></em></p>
                <?php } else {
                    ?><p class="right-text margin-bottom-min"><em>-Anonymous</em></p>
                <?php }                
            ?></div>
        <?php }
    ?><p class="centered-text">At McCrary Motorsports, we pride ourselves on providing friendly, top-notch service at affordable rates.</p>
    <p class="centered-text">Call or text <strong><?php echo get_option('phone'); ?></strong> to set up your appointment today.</p>
    </div>
    <?php get_footer();
?>