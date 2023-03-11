<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function mccrary_theme_files(){
    wp_enqueue_script('main-McCrary-site-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('McCrary-site-styles', get_stylesheet_directory_uri() . '/css/site-styles.css', false, '', 'all');
    wp_enqueue_style('McCrary-sections', get_stylesheet_directory_uri() . '/css/sections.css', false, '', 'all');
    wp_enqueue_style('McCrary-responsive', get_stylesheet_directory_uri() . '/css/responsive.css', false, 'all');
    wp_enqueue_style('McCrary-header', get_stylesheet_directory_uri() . '/css/header.css', false, 'all');
    wp_localize_script('main-McCrary-site-js', 'siteData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts','mccrary_theme_files');

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

function services_custom_post_types() {
    register_post_type('service', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-edit'
    ));
}

add_action('init', 'services_custom_post_types');

function reviews_custom_post_types() {
    register_post_type('review', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'reviews'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Reviews',
            'add_new_item' => 'Add New Review',
            'edit_item' => 'Edit Review',
            'all_items' => 'All Reviews',
            'singular_name' => 'Review'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));
}

add_action('init', 'reviews_custom_post_types');

//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions', 'editglobalcustomfields');
}

function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Global Custom Fields</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Phone Number:</strong><br />
	<input type="text" name="phone" size="45" value="<?php echo get_option('phone'); ?>" /></p>

    <p><input type="submit" name="Submit" value="Update Options" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="phone" />

	</form>
	</div>
	<?php
}

?>